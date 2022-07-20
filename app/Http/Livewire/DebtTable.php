<?php

namespace App\Http\Livewire;

use App\Models\Debt;
use App\Models\DebtStatus;
use App\Models\Method;
use App\Models\Order;
use Illuminate\Support\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\{Button,
    Column,
    Exportable,
    Footer,
    Header,
    PowerGrid,
    PowerGridComponent,
    PowerGridEloquent,
    Traits\Filter};

final class DebtTable extends PowerGridComponent
{
    use ActionButton;

    public string $tableName = 'debt_table';
    public string $primaryKey = 'id';
    public string $sortField = 'id';
    public string $delivery_type = 'orders.delivery_type';
    public string $address_from = "orders.address_from";
    public string $address_to = "orders.address_to";

    /*
    |--------------------------------------------------------------------------
    |  Features Setup
    |--------------------------------------------------------------------------
    | Setup Table's general features
    |
    */
    public function setUp(): array
    {
        $this->showCheckBox();

        return [
            Exportable::make('export')
                ->striped()
                ->type(Exportable::TYPE_XLS, Exportable::TYPE_CSV),
            Header::make()
                ->showToggleColumns(),

            Footer::make()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    /*
    |--------------------------------------------------------------------------
    |  Datasource
    |--------------------------------------------------------------------------
    | Provides data to your Table using a Model or Collection
    |
    */

    /**
    * PowerGrid datasource.
    *
    * @return Builder<\App\Models\Debt>
    */
    public function datasource(): Builder
    {
        return Debt::query()
            ->leftJoin('debt_statuses', 'debts.debt_status_id', '=', 'debt_statuses.id')
            ->leftJoin('orders', 'debts.order_id', '=', 'orders.id')
            ->where('orders.status_id','!=', 1)
            ->leftJoin('methods', 'orders.method_id', '=', 'methods.id')
            ->leftJoin('routes', 'orders.route_id', '=', 'routes.id')
            ->leftJoin('cities as to', 'routes.to_city_id', '=', 'to.id')
            ->leftJoin('cities as from', 'routes.from_city_id', '=', 'from.id')
            ->leftJoin('types', 'orders.type_id', '=', 'types.id')
            ->leftJoin('customers as sender', 'orders.sender_id', '=', 'sender.id')
            ->leftJoin('customers as receiver', 'orders.receiver_id', '=', 'receiver.id')
            ->leftJoin('customers as tp', 'orders.tp_id', '=', 'tp.id')
            ->leftJoin('companies as sender_company', 'orders.sender_company_id', '=', 'sender_company.id')
            ->leftJoin('companies as receiver_company', 'orders.receiver_company_id', '=', 'receiver_company.id')
            ->leftJoin('companies as tp_company', 'orders.tp_company_id', '=', 'tp_company.id')
            ->leftJoin('order_prices', 'orders.order_price_id', '=', 'order_prices.id')
            ->select(

                'orders.delivery_type',
                'orders.address_from',
                'orders.address_to',
                'orders.order_num',
                'tp.name as tp',
                'sender.name as sender',
                'receiver.name as receiver',
                'sender_company.INN as senderINN',
                'receiver_company.INN as receiverINN',
                'tp_company.INN as tpINN',
                'sender_company.name as sender_name',
                'receiver_company.name as receiver_name',
                'tp_company.name as tp_name',
                'methods.name as method',
//                'methods.id as method_id',
                'to.name as to_city',
                'from.name as from_city',
                'types.name as type',
                'order_prices.TT_price as TT_price',
                'order_prices.to_addr_price as to_addr_price',
                'order_prices.from_addr_price as from_addr_price',
                'order_prices.pac_price as pac_price',
                'order_prices.insurance_price as insurance_price',
                'order_prices.prr_to_addr_price as prr_to_addr_price',
                'order_prices.prr_from_addr_price as prr_from_addr_price',
                'order_prices.total as total',
                'debts.id as id',
                'orders.created_at as created_at',
                'orders.time_to_order as time_to_order',
                'debts.amount as debt_amount',
                'debts.debt_status_id as debt_status_id',
                'debt_statuses.name as debt_status',
                'debts.is_in_debt as is_in_debt'


            );
    }

    /*
    |--------------------------------------------------------------------------
    |  Relationship Search
    |--------------------------------------------------------------------------
    | Configure here relationships to be used by the Search and Table Filters.
    |
    */

    /**
     * Relationship search.
     *
     * @return array<string, array<int, string>>
     */
    public function relationSearch(): array
    {
        return [];
    }


    public function onUpdatedToggleable($id, $field, $value): void
    {
        if ($field == 'is_in_debt') {
            Debt::query()->find($id)->update([
                $field => $value,
                'amount' => 0,
                'debt_status_id' => $value ? 12  : 10
            ]);
            $this->fillData();
        }

    }
    /*
    |--------------------------------------------------------------------------
    |  Add Column
    |--------------------------------------------------------------------------
    | Make Datasource fields available to be used as columns.
    | You can pass a closure to transform/modify the data.
    |
    */
    public function addColumns(): PowerGridEloquent
    {
        return PowerGrid::eloquent()
            ->addColumn('order_num')
            ->addColumn('method')
            ->addColumn('delivery_type')
            ->addColumn('from_city')
            ->addColumn('to_city')
            ->addColumn('debt_status')
            ->addColumn('debt_amount')
            ->addColumn('is_in_debt')
            ->addColumn('address_from')
            ->addColumn('address_to')
            ->addColumn('sender')
            ->addColumn('senderINN')
            ->addColumn('receiver')
            ->addColumn('receiverINN')
            ->addColumn('total')
            ->addColumn('time_to_order')
            ->addColumn('created_at_formatted', fn (Debt $model) => Carbon::parse($model->created_at)->format('d/m/Y H:i:s'));

    }


    public function onUpdatedEditable(string $id, string $field, string $value): void
    {
        $order = Debt::find($id);
        $order->$field = $value;
        try {
            $order->save();
        } catch (\Exception $e) {
            dd($e->getMessage());
        }


    }

    /*
    |--------------------------------------------------------------------------
    |  Include Columns
    |--------------------------------------------------------------------------
    | Include the columns added columns, making them visible on the Table.
    | Each column can be configured with properties, filters, actions...
    |
    */

     /**
     * PowerGrid Columns.
     *
     * @return array<int, Column>
     */
    public function columns(): array
    {
        return [
            Column::make('ID', 'order_num')
                ->sortable(),

            Column::make('Вид Перевозки', 'method')
                ->makeInputSelect(Method::all(), 'name', 'methods.id')
                ->sortable(),

            Column::make('Тип Доставки', 'delivery_type')
                ->makeInputText('delivery_type')
                ->sortable(),

            Column::make('Из', 'from_city')
                ->makeInputText('from.name')
                ->sortable(),

            Column::make('В', 'to_city')
                ->makeInputText('to.name')
                ->sortable(),

            Column::make('Статус Задолженности', 'debt_status')
                ->makeInputSelect(DebtStatus::all(), 'name', 'debt_statuses.id')
                ->sortable(),

            Column::make('Сумма Задолженности', 'debt_amount')
                ->makeInputRange('to.name')
                ->sortable(),

            Column::make('Адрес забора', 'address_from')
                ->makeInputText('address_from')
                ->sortable(),

            Column::make('Адрес Доставки', 'address_to')
                ->makeInputText('address_to')
                ->sortable(),

            Column::make('Отправитель', 'sender')
                ->makeInputText('sender.name')
                ->sortable(),

            Column::make('ИНН отправ.', 'senderINN')
                ->makeInputText('sender_company.INN')
                ->sortable(),

            Column::make('Получатель', 'receiver')
                ->makeInputText('receiver.name')
                ->sortable(),

            Column::make('ИНН получ.', 'receiverINN')
                ->makeInputText('receiver_company.INN')
                ->sortable(),

            Column::make('Третье Лицо', 'tp')
                ->makeInputText('tp.name')
                ->sortable(),

            Column::make('ИНН ТЛ', 'tpINN')
                ->makeInputText('tp_company.INN')
                ->sortable(),

            Column::make('Итого', 'total')
                ->makeInputRange('total')
                ->sortable(),

            Column::make('Created at', 'created_at')
                ->hidden(),

            Column::make('Дата создания', 'time_to_order', 'time_to_order')
                ->sortable()
                ->makeInputDatePicker('orders.time_to_order')
        ];
    }

    /*
    |--------------------------------------------------------------------------
    | Actions Method
    |--------------------------------------------------------------------------
    | Enable the method below only if the Routes below are defined in your app.
    |
    */

     /**
     * PowerGrid Debt Action Buttons.
     *
     * @return array<int, Button>
     */


    public function actions(): array
    {
       return [
           Button::make('edit', 'Изменить')
               ->class('bg-red-500 cursor-pointer text-white px-3 py-2 m-1 rounded text-sm')
               ->openModal('change-debt' ,['id' => 'id'])
           ,
        ];
    }


    /*
    |--------------------------------------------------------------------------
    | Actions Rules
    |--------------------------------------------------------------------------
    | Enable the method below to configure Rules for your Table and Action Buttons.
    |
    */

     /**
     * PowerGrid Debt Action Rules.
     *
     * @return array<int, RuleActions>
     */


    public function actionRules(): array


    {
       return [

           Rule::rows()
               ->when(function (Debt $debt) {
                   return  $debt->is_in_debt == true;
               })
               ->setAttribute('class', 'bg-red-200 hover:bg-red-300'),
        ];
    }

}
