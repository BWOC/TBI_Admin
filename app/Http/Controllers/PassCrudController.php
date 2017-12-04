<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\PassRequest as StoreRequest;
use App\Http\Requests\PassRequest as UpdateRequest;

class PassCrudController extends CrudController
{
    public function setup()
    {

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Pass');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/pass');
        $this->crud->setEntityNameStrings('pass', 'passes');

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */

        // $this->crud->setFromDb();

        // ------ CRUD FIELDS
        // $this->crud->addField($options, 'update/create/both');
        // $this->crud->addFields($array_of_arrays, 'update/create/both');
        // $this->crud->removeField('name', 'update/create/both');
        // $this->crud->removeFields($array_of_names, 'update/create/both');

        $this->crud->addField([
            'name'  => 'student_id',
            'label' => 'Student Name',
            'type'  => 'select',
            'entity' => 'student',
            'attribute' => 'studentName',
            'model' => 'App\Models\Student',
            'tab'   => 'Status',
        ], 'update/create/both');


        $this->crud->addField([
        	'name' => 'event_id',
        	'label' => "Event"
      	]);
        $this->crud->addField([
            'name' => 'pass_type',
            'label' => 'Pass Type',
            'type' => "select",
            'entity' => 'passtype',
            'attribute' => 'passtype',
            'model' => 'App\Models\Passtype'
        ], 'update/create/both');
        $this->crud->addField([
            'name'  => 'start_date',
            'label' => 'Start Date',
            'type'  => 'date_picker',
            'date_picker_options' => [
                'format' => 'mm/dd/yyyy',
            ]
        ], 'update/create/both');
        $this->crud->addField([
            'name'  => 'end_date',
            'label' => 'End Date',
            'type'  => 'date_picker',
            'date_picker_options' => [
                'format' => 'mm/dd/yyyy',
            ]
        ], 'update/create/both');
        $this->crud->addField([
        	'name' => 'contact',
        	'label' => "Contact"
      	]);
        $this->crud->addField([
        	'name' => 'remarks',
          'type'  => 'textarea',
        	'label' => "Remarks"
      	]);


        // ------ CRUD COLUMNS
        // $this->crud->addColumn(); // add a single column, at the end of the stack
        // $this->crud->addColumns(); // add multiple columns, at the end of the stack
        // $this->crud->removeColumn('column_name'); // remove a column from the stack
        // $this->crud->removeColumns(['column_name_1', 'column_name_2']); // remove an array of columns from the stack
        // $this->crud->setColumnDetails('column_name', ['attribute' => 'value']); // adjusts the properties of the passed in column (by name)
        // $this->crud->setColumnsDetails(['column_1', 'column_2'], ['attribute' => 'value']);



        $this->crud->addColumn([
            'name' => 'event_id',
            'label' => 'Event'
        ]);

        $this->crud->addColumn([
            'label' => 'Pass Type',
            'type' => "select",
            'name' => 'pass_type',
            'entity' => 'passtype',
            'attribute' => 'passtype',
            'model' => 'App\Models\Passtype'
        ]);

        $this->crud->addColumn([
            'label' => 'Student',
            'type' => "select",
            'name' => 'student_id',
            'entity' => 'student',
            'attribute' => 'student',
            'model' => 'App\Models\Student'
        ]);


        $this->crud->addColumn([
            'name' => 'start_date',
            'type' => "date",
            'label' => 'Start Date'
        ]);
        $this->crud->addColumn([
            'name' => 'end_date',
            'type' => "date",
            'label' => 'End Date'
        ]);
        $this->crud->addColumn([
            'name' => 'remarks',
            'label' => 'Remarks'
        ]);

        $this->crud->addColumn([
            'name' => 'contact',
            'label' => 'Contact'
        ]);



        // ------ CRUD BUTTONS
        // possible positions: 'beginning' and 'end'; defaults to 'beginning' for the 'line' stack, 'end' for the others;
        // $this->crud->addButton($stack, $name, $type, $content, $position); // add a button; possible types are: view, model_function
        // $this->crud->addButtonFromModelFunction($stack, $name, $model_function_name, $position); // add a button whose HTML is returned by a method in the CRUD model
        // $this->crud->addButtonFromView($stack, $name, $view, $position); // add a button whose HTML is in a view placed at resources\views\vendor\backpack\crud\buttons
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
        // $this->crud->addClause('active');
        // $this->crud->addClause('type', 'car');
        // $this->crud->addClause('where', 'name', '==', 'car');
        // $this->crud->addClause('whereName', 'car');
        // $this->crud->addClause('whereHas', 'posts', function($query) {
        //     $query->activePosts();
        // });
        $this->addCustomCrudFilters();
        // $this->crud->addClause('withoutGlobalScopes');
        // $this->crud->addClause('withoutGlobalScope', VisibleScope::class);
        // $this->crud->with(); // eager load relationships
        // $this->crud->orderBy();
        // $this->crud->groupBy();
        // $this->crud->limit();
    }

    public function addCustomCrudFilters()
    {

      $this->crud->addFilter([
          'name' => 'pass_type',
          'type' => 'dropdown',
          'label'=> 'Pass Type'
      ], function() {
          return \App\Models\Passtype::all()->pluck('title', 'id')->toArray();
      }, function($value) {
          $this->crud->addClause('where', 'pass_type', $value);
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
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
