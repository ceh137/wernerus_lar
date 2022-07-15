<?php

namespace App\Http\Livewire;

use App\Models\Method;
use App\Models\Order;
use Illuminate\Support\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\{Button,
    Column,
    Detail,
    Exportable,
    Footer,
    Header,
    PowerGrid,
    PowerGridComponent,
    PowerGridEloquent,
    Traits\Listeners};

final class OrderTable extends PowerGridComponent
{
    use ActionButton;
    use Listeners;
    public string $tableName = 'order_table';
    public string $primaryKey = 'id';
    public string $sortField = 'id';
//    public string $delivery_type = "delivery_type";
//    public string $address_from = "address_from";

    public bool $ableToLoad = false;





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

            Header::make()->showSearchInput(),

            Footer::make()
                ->showPerPage()
                ->showRecordCount(),

            Detail::make()
                ->view('components.order_detail')
                ->options()
                ->showCollapseIcon(),
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
    * @return Builder<\App\Models\Order>
    */
    public function datasource(): Builder
    {
        return Order::query()
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
                'orders.order_num as order_num',
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
                'orders.id as id',
                'orders.created_at as created_at',
                'orders.time_to_order as time_to_order'

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
        return [
            'cities' => ['name'],
            'customers' => ['name'],
            'companies' => ['INN', 'name']
        ];
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
            ->addColumn('address_from')
            ->addColumn('address_to')
            ->addColumn('sender')
            ->addColumn('senderINN')
            ->addColumn('receiver')
            ->addColumn('receiverINN')
            ->addColumn('total')
            ->addColumn('time_to_order')
            ->addColumn('created_at_formatted', fn (Order $model) => Carbon::parse($model->created_at)->format('d/m/Y H:i:s'));
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
                ->searchable()
                ->sortable(),

            Column::make('Вид Перевозки', 'method')
                ->searchable()
                ->makeInputSelect(Method::all(), 'name', 'methods.id')
                ->sortable(),

            Column::make('Тип Доставки', 'delivery_type')
                ->editOnClick()
                ->searchable()
                ->makeInputText('delivery_type')
                ->sortable(),

            Column::make('Из', 'from_city')
                ->searchable()
                ->makeInputText('from.name')
                ->sortable(),

            Column::make('В', 'to_city')
                ->searchable()
                ->makeInputText('to.name')
                ->sortable(),

            Column::make('Адрес забора', 'address_from')
                ->editOnClick()
                ->searchable()
                ->makeInputText('address_from')
                ->sortable(),

            Column::make('Адрес Доставки', 'address_to')
                ->editOnClick()
                ->searchable()
                ->makeInputText('address_to')
                ->sortable(),

            Column::make('Отправитель', 'sender')
                ->searchable()
                ->makeInputText('sender.name')
                ->sortable(),
            Column::make('ИНН отправ.', 'senderINN')
                ->searchable()
                ->makeInputText('sender_company.INN')
                ->sortable(),

            Column::make('Получатель', 'receiver')
                ->searchable()
                ->makeInputText('receiver.name')
                ->sortable(),
            Column::make('ИНН получ.', 'receiverINN')
                ->searchable()
                ->makeInputText('receiver_company.INN')
                ->sortable(),

//            Column::make('Третье Лицо', 'tp')
//                ->searchable()
//                ->makeInputText('tp.name')
//                ->sortable(),
//            Column::make('ИНН ТЛ', 'tpINN')
//                ->searchable()
//                ->makeInputText('tp_company.INN')
//                ->sortable(),

            Column::make('Итого', 'total')
                ->searchable()
                ->makeInputRange('total')
                ->sortable(),

            Column::make('Created at', 'created_at')
                ->hidden(),

            Column::make('Дата создания', 'time_to_order', 'time_to_order')
                ->sortable()
                ->makeInputDatePicker('orders.time_to_order')
                ->searchable()
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
     * PowerGrid Order Action Buttons.
     *
     * @return array<int, Button>
     */

    /*
    public function actions(): array
    {
       return [
           Button::make('edit', 'Edit')
               ->class('bg-indigo-500 cursor-pointer text-white px-3 py-2.5 m-1 rounded text-sm')
               ->route('order_application.edit', ['order_application' => 'id']),

           Button::make('destroy', 'Delete')
               ->class('bg-red-500 cursor-pointer text-white px-3 py-2 m-1 rounded text-sm')
               ->route('order_application.destroy', ['order_application' => 'id'])
               ->method('delete')
        ];
    }
    */

    /*
    |--------------------------------------------------------------------------
    | Actions Rules
    |--------------------------------------------------------------------------
    | Enable the method below to configure Rules for your Table and Action Buttons.
    |
    */

     /**
     * PowerGrid Order Action Rules.
     *
     * @return array<int, RuleActions>
     */

    /*
    public function actionRules(): array
    {
       return [

           //Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($order_application) => $order_application->id === 1)
                ->hide(),
        ];
    }
    */
}
