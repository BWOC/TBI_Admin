<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\ApplicationDormRequest as StoreRequest;
use App\Http\Requests\ApplicationDormRequest as UpdateRequest;

class ApplicationDormCrudController extends CrudController
{
    public $dorm_buildings = array(
        'J',
        'K',
        'N',
        'O'
    );

    public $room_numbers = array(
        '1',
        '2',
        '3',
        '4',
        '5',
        '6',
        '7',
        '8',
        '9',
        '10',
        '11',
        '12'
    );

    public function setup()
    {
        $dorm_buildings_array = array_combine($this->dorm_buildings,$this->dorm_buildings);
        $room_numbers_array = array_combine($this->room_numbers,$this->room_numbers);
        
        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Application');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/dorm');
        $this->crud->setEntityNameStrings('dorm', 'dorms');

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */

        //$this->crud->setFromDb();

        // ------ CRUD FIELDS
        $this->crud->addColumn([
            'label' => 'Applicant',
            'type' => "select",
            'name' => 'applicant_id',
            'entity' => 'applicant',
            'attribute' => 'applicant',
            'model' => 'App\Models\Applicant',
        ]);
        $this->crud->addColumn([
            'name' => 'dorm_building',
            'label' => 'Dorm Building'
        ]);
        $this->crud->addColumn([
            'name' => 'room_number',
            'label' => 'Room Number'
        ]);
        // $this->crud->addField($options, 'update/create/both');
        // $this->crud->addFields($array_of_arrays, 'update/create/both');
        // $this->crud->removeField('name', 'update/create/both');
        // $this->crud->removeFields($array_of_names, 'update/create/both');

        // ------ CRUD COLUMNS
        $this->crud->addField([
            'name' => 'applicant_summary',
            'label' => 'Applicant',
            'type' => 'applicant_summary'
        ]);
        $this->crud->addField([
            'name'  => 'dorm_building',
            'label' => 'Dorm Building',
            'type'  => 'select_from_array',
            'options' => $dorm_buildings_array,
            'allows_null' => true
        ]);
        $this->crud->addField([
            'name'  => 'room_number',
            'label' => 'Room Number',
            'type'  => 'select_from_array',
            'options' => $room_numbers_array,
            'allows_null' => true
        ]);
        $this->crud->addField([
            'name'  => 'dorm_notes',
            'label' => 'Notes:',
            'type'  => 'textarea',
        ]);
        $this->crud->addField([   // Hidden
            'name' => 'applicant_id',
            'type' => 'hidden'
        ]);
        // $this->crud->addColumn(); // add a single column, at the end of the stack
        // $this->crud->addColumns(); // add multiple columns, at the end of the stack
        // $this->crud->removeColumn('column_name'); // remove a column from the stack
        // $this->crud->removeColumns(['column_name_1', 'column_name_2']); // remove an array of columns from the stack
        // $this->crud->setColumnDetails('column_name', ['attribute' => 'value']); // adjusts the properties of the passed in column (by name)
        // $this->crud->setColumnsDetails(['column_1', 'column_2'], ['attribute' => 'value']);

        // ------ CRUD BUTTONS
        // possible positions: 'beginning' and 'end'; defaults to 'beginning' for the 'line' stack, 'end' for the others;
        // $this->crud->addButton($stack, $name, $type, $content, $position); // add a button; possible types are: view, model_function
        // $this->crud->addButtonFromModelFunction($stack, $name, $model_function_name, $position); // add a button whose HTML is returned by a method in the CRUD model
        // $this->crud->addButtonFromView($stack, $name, $view, $position); // add a button whose HTML is in a view placed at resources\views\vendor\backpack\crud\buttons
        $this->crud->removeButton('create');
        // $this->crud->removeButton($name);
        // $this->crud->removeButtonFromStack($name, $stack);
        // $this->crud->removeAllButtons();
        // $this->crud->removeAllButtonsFromStack('line');

        // ------ CRUD ACCESS
        // $this->crud->allowAccess(['list', 'create', 'update', 'reorder', 'delete']);
        // $this->crud->denyAccess(['list', 'create', 'update', 'reorder', 'delete']);

        // ------ CRUD REORDER
        // $this->crud->enableReorder('label_name', MAX_TREE_LEVEL);
        // NOTE: you also need to do allow access to the right users: $this->crud->allowAccess('reorder');

        // ------ CRUD DETAILS ROW
        $this->crud->enableDetailsRow();
        $this->crud->allowAccess('details_row');
        $this->crud->setDetailsRowView('vendor.backpack.crud.details_row.dorm');
        // $this->crud->enableDetailsRow();
        // NOTE: you also need to do allow access to the right users: $this->crud->allowAccess('details_row');
        // NOTE: you also need to do overwrite the showDetailsRow($id) method in your EntityCrudController to show whatever you'd like in the details row OR overwrite the views/backpack/crud/details_row.blade.php

        // ------ REVISIONS
        // You also need to use \Venturecraft\Revisionable\RevisionableTrait;
        // Please check out: https://laravel-backpack.readme.io/docs/crud#revisions
        // $this->crud->allowAccess('revisions');

        // ------ AJAX TABLE VIEW
        // Please note the drawbacks of this though:
        // - 1-n and n-n columns are not searchable
        // - date and datetime columns won't be sortable anymore
        // $this->crud->enableAjaxTable();

        // ------ DATATABLE EXPORT BUTTONS
        // Show export to PDF, CSV, XLS and Print buttons on the table view.
        // Does not work well with AJAX datatables.
        // $this->crud->enableExportButtons();

        // ------ ADVANCED QUERIES
        $this->addCustomCrudFilters();
        $this->crud->addClause('where','status','Approved');
        $this->crud->addClause('where','cancelled','0');
        $this->crud->addClause('whereHas', 'registration', function ($q) {
            $q->where('tbi_application_registration.checked_in', '1');
        });
        // $this->crud->addClause('active');
        // $this->crud->addClause('type', 'car');
        // $this->crud->addClause('where', 'name', '==', 'car');
        // $this->crud->addClause('whereName', 'car');
        // $this->crud->addClause('whereHas', 'posts', function($query) {
        //     $query->activePosts();
        // });
        // $this->crud->addClause('withoutGlobalScopes');
        // $this->crud->addClause('withoutGlobalScope', VisibleScope::class);
        $this->crud->with(['applicant','applicationDorm','registration']); // eager load relationships
        // $this->crud->orderBy();
        // $this->crud->groupBy();
        // $this->crud->limit();
    }
    public function addCustomCrudFilters()
    {
        $dorm_buildings_array = array_combine($this->dorm_buildings,$this->dorm_buildings);
        $room_numbers_array = array_combine($this->room_numbers,$this->room_numbers);

        // Add Dorm filter
        $this->crud->addFilter([
            'type' => 'dropdown',
            'name' => 'dorm_building',
            'label'=> 'Dorm'
        ],
        $dorm_buildings_array,
        function($value) {
            return $this->crud->query->whereHas('applicationDorm', function ($q) use ($value) {
                $q->where('tbi_application_dorm.dorm_building', $value);
            });
        });

        // Add Room filter
        $this->crud->addFilter([
            'type' => 'dropdown',
            'name' => 'room_number',
            'label'=> 'Room'
        ],
        $room_numbers_array,
        function($value) {
            return $this->crud->query->whereHas('applicationDorm', function ($q) use ($value) {
                $q->where('tbi_application_dorm.room_number', $value);
            });
        });
    }
    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        $application = \App\Models\Application::find($request->id);
        $applicationDorm = \App\Models\ApplicationDorm::firstOrCreate(['application_id'=>$request->id]);                           
        $application->update($request->all());
        $applicationDorm->update($request->all());
        $redirect_location = parent::updateCrud();
        return $redirect_location;
    }
}
