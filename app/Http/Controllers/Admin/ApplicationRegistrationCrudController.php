<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\ApplicationRegistrationRequest as StoreRequest;
use App\Http\Requests\ApplicationRegistrationRequest as UpdateRequest;

class ApplicationRegistrationCrudController extends CrudController
{
    public function setup()
    {
        $countries = array(
            'Afghanistan',
            'Albania',
            'Algeria',
            'American Samoa',
            'Andorra',
            'Angola',
            'Anguilla',
            'Antarctica',
            'Antigua and Barbuda',
            'Argentina',
            'Armenia',
            'Aruba',
            'Australia',
            'Austria',
            'Azerbaijan',
            'Bahamas',
            'Bahrain',
            'Bangladesh',
            'Barbados',
            'Belarus',
            'Belgium',
            'Belize',
            'Benin',
            'Bermuda',
            'Bhutan',
            'Bolivia',
            'Bosnia and Herzegowina',
            'Botswana',
            'Bouvet Island',
            'Brazil',
            'British Indian Ocean Territory',
            'Brunei Darussalam',
            'Bulgaria',
            'Burkina Faso',
            'Burundi',
            'Cambodia',
            'Cameroon',
            'Canada',
            'Cape Verde',
            'Cayman Islands',
            'Central African Republic',
            'Chad',
            'Chile',
            'China',
            'Christmas Island',
            'Cocos (Keeling) Islands',
            'Colombia',
            'Comoros',
            'Congo',
            'Congo, the Democratic Republic of the',
            'Cook Islands',
            'Costa Rica',
            'Cote d\'Ivoire',
            'Croatia (Hrvatska)',
            'Cuba',
            'Cyprus',
            'Czech Republic',
            'Denmark',
            'Djibouti',
            'Dominica',
            'Dominican Republic',
            'East Timor',
            'Ecuador',
            'Egypt',
            'El Salvador',
            'Equatorial Guinea',
            'Eritrea',
            'Estonia',
            'Ethiopia',
            'Falkland Islands (Malvinas)',
            'Faroe Islands',
            'Fiji',
            'Finland',
            'France',
            'France Metropolitan',
            'French Guiana',
            'French Polynesia',
            'French Southern Territories',
            'Gabon',
            'Gambia',
            'Georgia',
            'Germany',
            'Ghana',
            'Gibraltar',
            'Greece',
            'Greenland',
            'Grenada',
            'Guadeloupe',
            'Guam',
            'Guatemala',
            'Guinea',
            'Guinea-Bissau',
            'Guyana',
            'Haiti',
            'Heard and Mc Donald Islands',
            'Holy See (Vatican City State)',
            'Honduras',
            'Hong Kong',
            'Hungary',
            'Iceland',
            'India',
            'Indonesia',
            'Iran (Islamic Republic of)',
            'Iraq',
            'Ireland',
            'Israel',
            'Italy',
            'Jamaica',
            'Japan',
            'Jordan',
            'Kazakhstan',
            'Kenya',
            'Kiribati',
            'Korea, Democratic People\'s Republic of',
            'Korea, Republic of',
            'Kuwait',
            'Kyrgyzstan',
            'Lao, People\'s Democratic Republic',
            'Latvia',
            'Lebanon',
            'Lesotho',
            'Liberia',
            'Libyan Arab Jamahiriya',
            'Liechtenstein',
            'Lithuania',
            'Luxembourg',
            'Macau',
            'Macedonia, The Former Yugoslav Republic of',
            'Madagascar',
            'Malawi',
            'Malaysia',
            'Maldives',
            'Mali',
            'Malta',
            'Marshall Islands',
            'Martinique',
            'Mauritania',
            'Mauritius',
            'Mayotte',
            'Mexico',
            'Micronesia, Federated States of',
            'Moldova, Republic of',
            'Monaco',
            'Mongolia',
            'Montserrat',
            'Morocco',
            'Mozambique',
            'Myanmar',
            'Namibia',
            'Nauru',
            'Nepal',
            'Netherlands',
            'Netherlands Antilles',
            'New Caledonia',
            'New Zealand',
            'Nicaragua',
            'Niger',
            'Nigeria',
            'Niue',
            'Norfolk Island',
            'Northern Mariana Islands',
            'Norway',
            'Oman',
            'Pakistan',
            'Palau',
            'Panama',
            'Papua New Guinea',
            'Paraguay',
            'Peru',
            'Philippines',
            'Pitcairn',
            'Poland',
            'Portugal',
            'Puerto Rico',
            'Qatar',
            'Reunion',
            'Romania',
            'Russian Federation',
            'Rwanda',
            'Saint Kitts and Nevis',
            'Saint Lucia',
            'Saint Vincent and the Grenadines',
            'Samoa',
            'San Marino',
            'Sao Tome and Principe',
            'Saudi Arabia',
            'Senegal',
            'Seychelles',
            'Sierra Leone',
            'Singapore',
            'Slovakia (Slovak Republic)',
            'Slovenia',
            'Solomon Islands',
            'Somalia',
            'South Africa',
            'South Georgia and the South Sandwich Islands',
            'Spain',
            'Sri Lanka',
            'St. Helena',
            'St. Pierre and Miquelon',
            'Sudan',
            'Suriname',
            'Svalbard and Jan Mayen Islands',
            'Swaziland',
            'Sweden',
            'Switzerland',
            'Syrian Arab Republic',
            'Taiwan, Province of China',
            'Tajikistan',
            'Tanzania, United Republic of',
            'Thailand',
            'Togo',
            'Tokelau',
            'Tonga',
            'Trinidad and Tobago',
            'Tunisia',
            'Turkey',
            'Turkmenistan',
            'Turks and Caicos Islands',
            'Tuvalu',
            'Uganda',
            'Ukraine',
            'United Arab Emirates',
            'United Kingdom',
            'United States',
            'United States Minor Outlying Islands',
            'Uruguay',
            'Uzbekistan',
            'Vanuatu',
            'Venezuela',
            'Vietnam',
            'Virgin Islands (British)',
            'Virgin Islands (U.S.)',
            'Wallis and Futuna Islands',
            'Western Sahara',
            'Yemen',
            'Yugoslavia',
            'Zambia',
            'Zimbabwe'
        );
        $country_array = array_combine($countries,$countries);
        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Application');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/registration');
        $this->crud->setEntityNameStrings('registration', 'registrations');

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
            'label' => 'Program',
            'type' => "select",
            'name' => 'program_id',
            'entity' => 'program',
            'attribute' => 'title',
            'model' => 'App\Models\Program'
        ]);
        $this->crud->addColumn([
            'label' => 'Checked In',
            'type' => 'select',
            'name' => 'application_id',
            'entity' => 'registration',
            'attribute' => 'checked_in_summary',
            'model' => 'App\Models\ApplicationRegistration'
        ]);

        // $this->crud->addField($options, 'update/create/both');
        // $this->crud->addFields($array_of_arrays, 'update/create/both');
        // $this->crud->removeField('name', 'update/create/both');
        // $this->crud->removeFields($array_of_names, 'update/create/both');

        // ------ CRUD COLUMNS

        // -----------------
        // General tab
        // -----------------

        $this->crud->addField([
            'name'  => 'first_name',
            'label' => 'First Name',
            'type'  => 'text',
            'tab'   => 'General Info',
        ]);
        $this->crud->addField([
            'name'  => 'middle_name',
            'label' => 'Middle Name',
            'type'  => 'text',
            'tab'   => 'General Info',
        ]);
        $this->crud->addField([
            'name'  => 'last_name',
            'label' => 'Last Name',
            'type'  => 'text',
            'tab'   => 'General Info',
        ]);
        $this->crud->addField([
            'name'  => 'phone_number',
            'label' => 'Phone Number',
            'type'  => 'text',
            'tab'   => 'General Info'
        ]);
        $this->crud->addField([
            'name'  => 'email_address',
            'label' => 'Email Address',
            'type'  => 'email',
            'tab'   => 'General Info'
        ]);
        $this->crud->addField([   // CustomHTML
            'name' => 'separator',
            'type' => 'custom_html',
            'value' => '<hr>',
            'tab'   => 'General Info'
        ]);
        $this->crud->addField([
            'name'  => 'address_street_1',
            'label' => 'Mailing Address',
            'type'  => 'text',
            'tab'   => 'General Info'
        ]);
        $this->crud->addField([
            'name'  => 'address_street_2',
            'label' => 'Address Line 2',
            'type'  => 'text',
            'tab'   => 'General Info'
        ]);
        $this->crud->addField([
            'name'  => 'address_city',
            'label' => 'City',
            'type'  => 'text',
            'tab'   => 'General Info'
        ]);
        $this->crud->addField([
            'name'  => 'address_state',
            'label' => 'State',
            'type'  => 'text',
            'tab'   => 'General Info'
        ]);
        $this->crud->addField([
            'name'  => 'address_zip',
            'label' => 'ZIP Code',
            'type'  => 'text',
            'tab'   => 'General Info'
        ]);

        $this->crud->addField([
            'name'  => 'medical_contact_first_name',
            'label' => 'First Name',
            'type'  => 'text',
            'tab'   => 'Emergency Contact'
        ]);
        $this->crud->addField([
            'name'  => 'medical_contact_last_name',
            'label' => 'Last Name',
            'type'  => 'text',
            'tab'   => 'Emergency Contact'
        ]);
        $this->crud->addField([
            'name'  => 'medical_contact_phone',
            'label' => 'Phone',
            'type'  => 'text',
            'tab'   => 'Emergency Contact'
        ]);
        $this->crud->addField([
            'name'  => 'medical_contact_address_street',
            'label' => 'Mailing Address',
            'type'  => 'text',
            'tab'   => 'Emergency Contact'
        ]);
        $this->crud->addField([
            'name'  => 'medical_contact_address_city',
            'label' => 'City',
            'type'  => 'text',
            'tab'   => 'Emergency Contact'
            ]);
        $this->crud->addField([
            'name'  => 'medical_contact_address_state',
            'label' => 'State',
            'type'  => 'text',
            'tab'   => 'Emergency Contact'
            ]);
        $this->crud->addField([
            'name'  => 'medical_contact_address_zip',
            'label' => 'ZIP Code',
            'type'  => 'text',
            'tab'   => 'Emergency Contact'
        ]);
        $this->crud->addField([
            'name'  => 'medical_contact_relationship',
            'label' => 'Relationship',
            'type'  => 'text',
            'tab'   => 'Emergency Contact'
        ]);

        $this->crud->addField([
            'name'  => 'vehicle_make',
            'label' => 'Make',
            'type'  => 'text',
            'tab'   => 'Vehicle Registration'
        ]);
        $this->crud->addField([
            'name'  => 'vehicle_model',
            'label' => 'Model',
            'type'  => 'text',
            'tab'   => 'Vehicle Registration'
        ]);
        $this->crud->addField([
            'name'  => 'vehicle_color',
            'label' => 'Color',
            'type'  => 'text',
            'tab'   => 'Vehicle Registration'
        ]);
        $this->crud->addField([
            'name'  => 'vehicle_insurance',
            'label' => 'Insurance',
            'type'  => 'text',
            'tab'   => 'Vehicle Registration'
            ]);
        $this->crud->addField([
            'name'  => 'vehicle_license_plate',
            'label' => 'License Plate',
            'type'  => 'text',
            'tab'   => 'Vehicle Registration'
            ]);
        $this->crud->addField([
            'name'  => 'vehicle_license_id',
            'label' => 'Drivers ID#',
            'type'  => 'text',
            'tab'   => 'Vehicle Registration'
            ]);
        $this->crud->addField([
            'name'  => 'vehicle_state',
            'label' => 'ID State',
            'type'  => 'text',
            'tab'   => 'Vehicle Registration'
        ]);

        $this->crud->addField([
            'name'  => 'address_country',
            'label' => 'Country',
            'type'  => 'select_from_array',
            'options' => $country_array,
            'tab'   => 'General Info'
        ]);
        $this->crud->addField([   // Hidden
            'name' => 'applicant_id',
            'type' => 'hidden'
        ]);
        $this->crud->addField([
            'name'  => 'job_active',
            'label' => 'Employed',
            'type'  => 'radio',
            'options' => [
                '0' => 'No',
                '1' => 'Yes'
            ],
            'tab'   => 'Job Information',
            'inline' => true
        ]); 
        $this->crud->addField([
            'name'  => 'job_location',
            'label' => 'Location',
            'type'  => 'text',
            'tab'   => 'Job Information'
        ]);
        $this->crud->addField([
            'name'  => 'job_contact_name',
            'label' => 'Supervisor',
            'type'  => 'text',
            'tab'   => 'Job Information'
        ]);
        $this->crud->addField([
            'name'  => 'job_contact_number',
            'label' => 'Phone Number',
            'type'  => 'text',
            'tab'   => 'Job Information'
        ]);
        $this->crud->addField([
            'name'  => 'job_schedule',
            'label' => 'Schedule',
            'type'  => 'textarea',
            'tab'   => 'Job Information'
        ]);

        $this->crud->addField([
            'name'  => 'info_confirmed',
            'label' => 'Information Confirmed',
            'type'  => 'radio',
            'options' => [
                '0' => 'No',
                '1' => 'Yes'
            ],
            'tab'   => 'Check In / Confirmation',
            'inline' => true
        ]); 
        $this->crud->addField([
            'name'  => 'medical_confirmed',
            'label' => 'Medical Confirmed',
            'type'  => 'radio',
            'options' => [
                '0' => 'No',
                '1' => 'Yes'
            ],
            'tab'   => 'Check In / Confirmation',
            'inline' => true
        ]); 
        $this->crud->addField([
            'name'  => 'checked_in',
            'label' => 'Checked In',
            'type'  => 'radio',
            'options' => [
                '0' => 'No',
                '1' => 'Yes'
            ],
            'tab'   => 'Check In / Confirmation',
            'inline' => true
        ]); 
        // $this->crud->addColumn(); // add a single column, at the end of the stack
        // $this->crud->addColumns(); // add multiple columns, at the end of the stack
        // $this->crud->removeColumn('column_name'); // remove a column from the stack
        // $this->crud->removeColumns(['column_name_1', 'column_name_2']); // remove an array of columns from the stack
        // $this->crud->setColumnDetails('column_name', ['attribute' => 'value']); // adjusts the properties of the passed in column (by name)
        // $this->crud->setColumnsDetails(['column_1', 'column_2'], ['attribute' => 'value']);

        // ------ CRUD BUTTONS
        $this->crud->removeButton('create');
        $this->crud->removeButton('delete');
        $this->crud->removeButton('update');
        $this->crud->addButtonFromView('line','check_in','checkin');
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
        $this->crud->enableDetailsRow();
        $this->crud->allowAccess('details_row');
        $this->crud->setDetailsRowView('vendor.backpack.crud.details_row.registration');
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
        $this->crud->setDefaultPageLength(10);
        // ------ DATATABLE EXPORT BUTTONS
        // Show export to PDF, CSV, XLS and Print buttons on the table view.
        // Does not work well with AJAX datatables.
        // $this->crud->enableExportButtons();
        $this->addCustomCrudFilters();
        // ------ ADVANCED QUERIES
        $this->crud->addClause('where','status','Approved');
        $this->crud->addClause('where','cancelled','0');
        // $this->crud->addClause('type', 'car');
        // $this->crud->addClause('where', 'name', '==', 'car');
        // $this->crud->addClause('whereName', 'car');
        // $this->crud->addClause('whereHas', 'posts', function($query) {
        //     $query->activePosts();
        // });
        // $this->crud->addClause('withoutGlobalScopes');
        // $this->crud->addClause('withoutGlobalScope', VisibleScope::class);
        // $this->crud->with(); // eager load relationships
        // $this->crud->orderBy();
        // $this->crud->groupBy();
        // $this->crud->limit();
    }

    public function addCustomCrudFilters()
    {
        // Add Archive filter
        $this->crud->addFilter([
            'type' => 'dropdown',
            'name' => 'checked_in',
            'label'=> 'Checked In'
        ],
        [0 => 'No',1 => 'Yes'],
        function($value) {
            return $this->crud->query->whereHas('registration', function ($q) use ($value) {
                $q->where('tbi_application_registration.checked_in', $value);
            });
            //$this->crud->addClause('where', 'tbi_application_registration.checked_in', $value);
        });

        // Add Program filter
        $this->crud->addFilter([
            'name' => 'program',
            'type' => 'dropdown',
            'label'=> 'Program'
        ], function() {
            return \App\Models\Program::all()->pluck('title', 'id')->toArray();
        }, function($value) {
            $this->crud->addClause('where', 'program_id', $value);
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
        $application = \App\Models\Application::find($request->id);
        $applicant = \App\Models\Applicant::find($request->applicant_id);
        $applicationGeneral = \App\Models\ApplicationGeneral::firstOrCreate(['application_id'=>$request->id]);
        $applicationJob = \App\Models\ApplicationJob::firstOrCreate(['application_id'=>$request->id]);
        $applicationMedicalContact = \App\Models\ApplicationMedicalContact::firstOrCreate(['application_id'=>$request->id]);
        $applicationVehicle = \App\Models\ApplicationVehicle::firstOrCreate(['application_id'=>$request->id]);
        $applicationRegistration = \App\Models\ApplicationRegistration::firstOrCreate(['application_id'=>$request->id]);
        
        /*$applicationBackground = \App\Models\ApplicationBackground::firstOrCreate(['application_id'=>$request->id]);        
        $applicationParent = \App\Models\ApplicationParents::firstOrCreate(['application_id'=>$request->id]);                
        $applicationPersonal = \App\Models\ApplicationPersonal::firstOrCreate(['application_id'=>$request->id]);                        
        $applicationChurch = \App\Models\ApplicationChurch::firstOrCreate(['application_id'=>$request->id]); */
        $application->update($request->all());
        $applicant->update($request->all());
        $applicationGeneral->update($request->all());
        $applicationJob->update($request->all());
        $applicationMedicalContact->update($request->all());
        $applicationVehicle->update($request->all());
        $applicationRegistration->update($request->all());
        
        /*$applicationBackground->update($request->all());
        $applicationParent->update($request->all());
        $applicationPersonal->update($request->all());
        $applicationChurch->update($request->all());*/
        $redirect_location = parent::updateCrud();
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
