<?php

namespace App\Http\Livewire;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridEloquent};

final class UserTable extends PowerGridComponent
{
    use ActionButton;

    public string $tableName = 'user_table';
    public string $primaryKey = 'id';

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
    * @return Builder<\App\Models\User>
    */
    public function datasource(): Builder
    {
        return Customer::query()
            ->leftJoin('companies', 'customers.company_id', '=', 'companies.id')
            ->leftJoin('users as managers', 'customers.manager_id', '=', 'managers.id')
            ->select(
                'customers.id as id',
                'customers.name as name',
                'customers.telnum as telnum',
                'customers.email as email',
                'companies.name as comp_name',
                'companies.INN as INN',
                'customers.created_at as created_at',
                'managers.id as managers_id',
                'managers.name as managers_name'
            )
            ;
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
            ->addColumn('id')
            ->addColumn('name')
            ->addColumn('email')
            ->addColumn('telnum')
            ->addColumn('INN')
            ->addColumn('comp_name')
            ->addColumn('created_at')
            ->addColumn('created_at_formatted', fn (Customer $model) => Carbon::parse($model->created_at)->format('d/m/Y H:i:s'));
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
            Column::make('ID', 'id')
                ->searchable()
                ->sortable(),

            Column::make('ФИО', 'name')
                ->searchable()
                ->makeInputText('customers.name')
                ->sortable(),

            Column::make('Email', 'email')
                ->searchable()
                ->makeInputText('email')
                ->sortable(),

            Column::make('Номер Телефона', 'telnum')
                ->searchable()
                ->makeInputText('customers.telnum')
                ->sortable(),

            Column::make('ИНН', 'INN')
                ->searchable()
                ->makeInputText('INN')
                ->sortable(),

            Column::make('Компания', 'comp_name')
                ->searchable()
                ->makeInputText('comp_name')
                ->sortable(),

            Column::make('Менеджер', 'managers_name')
                ->searchable()
                ->makeInputText('managers.name')
                ->sortable(),

            Column::make('Created at', 'created_at')
                ->hidden(),



            Column::make('Created at', 'created_at_formatted', 'created_at')
                ->makeInputDatePicker()
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
     * PowerGrid User Action Buttons.
     *
     * @return array<int, Button>
     */


    public function actions(): array
    {
       return [
           Button::make('edit', 'Ред.')
               ->class('bg-indigo-500 cursor-pointer text-white px-3 py-2.5 m-1 rounded text-sm')
               ->openModal('user-edit', ['id' => 'id']),

//           Button::make('destroy', 'Delete')
//               ->class('bg-red-500 cursor-pointer text-white px-3 py-2 m-1 rounded text-sm')
//               ->route('user.destroy', ['user' => 'id'])
//               ->method('delete')
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
     * PowerGrid User Action Rules.
     *
     * @return array<int, RuleActions>
     */

    /*
    public function actionRules(): array
    {
       return [

           //Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($user) => $user->id === 1)
                ->hide(),
        ];
    }
    */
}
