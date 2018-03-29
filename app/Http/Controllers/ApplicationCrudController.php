<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\ApplicationRequest as StoreRequest;
use App\Http\Requests\ApplicationRequest as UpdateRequest;

class ApplicationCrudController extends CrudController
{
    public function setup()
    {


      $parent_types = array(
          'Father',
          'Mother',
          'Grandparent',
          'Guardian',
          'Other'
      );
      $parent_type_array = array_combine($parent_types,$parent_types);
      $races = array(
          'African-American',
          'Asian',
          'Caucasian',
          'Hispanic',
          'Other'
      );
      $race_array = array_combine($races,$races);
      $religion = array(
          'Christian',
          'Jewish',
          'Muslim',
          'None',
          'Other'
      );
      $religion_array = array_combine($religion,$religion);
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
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/application');
        $this->crud->setEntityNameStrings('application', 'applications');

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
            'name'  => 'status',
            'label' => 'Application Status',
            'type'  => 'select_from_array',
            'options' => ['Everything in, ready for review' => 'Everything in, ready for review',
            'App received, missing documents' => 'App received, missing documents',
            'No app, other documents received' => 'No app, other documents received',
            'Nothing in, but interested' => 'Nothing in, but interested',
            'Approved' => 'Approved',
            'Pending' => 'Pending',
            'Under Review' => 'Under Review',
            'Not Coming' => 'Not Coming'],
            'allows_null' => true,
            'tab'   => 'Status',
        ]);

        $this->crud->addColumn([
            'name' => 'status',
            'type' => "text",
            'label' => 'Status'
        ]);

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
            'name'  => 'suffix',
            'label' => 'Suffix',
            'type'  => 'text',
            'tab'   => 'General Info',
        ]);
        $this->crud->addField([
            'name'  => 'gender',
            'label' => 'Gender',
            'type'  => 'radio',
            'options' => [
                'Male' => 'Male',
                'Female' => 'Female'
            ],
            'tab'   => 'General Info',
            'inline' => true
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
            'name'  => 'address_country',
            'label' => 'Country',
            'type'  => 'select_from_array',
            'options' => $country_array,
            'tab'   => 'General Info'
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
            'name' => 'separator2',
            'type' => 'custom_html',
            'value' => '<hr>',
            'tab'   => 'General Info'
        ]);
        $this->crud->addField([
            'name'  => 'ssn',
            'label' => 'Social Security Number',
            'type'  => 'text',
            'tab'   => 'General Info'
        ]);

        // $this->crud->addField([
        //     'name'  => 'birthdate',
        //     'label' => 'Change DOB',
        //     'type'  => 'date_picker',
        //     'date_picker_options' => [
        //         'format' => 'mm-dd-yyyy',
        //     ],
        //     'tab'   => 'General Info'
        // ]);
        $this->crud->addField([
            'name'  => 'birthdate',
            'label' => 'Current DOB',
            'type'  => 'text',
            'tab'   => 'General Info'
        ]);

        $this->crud->addField([   // CustomHTML
            'name' => 'separator3',
            'type' => 'custom_html',
            'value' => '<hr>',
            'tab'   => 'General Info'
        ]);
        $this->crud->addField([
            'name'  => 'referred_by',
            'label' => 'How did you hear about Texas Bible Institute?',
            'type'  => 'textarea',
            'tab'   => 'General Info'
        ]);
        $this->crud->addField([ // image
            'label' => "Photo",
            'name' => "photo",
            'type' => 'image',
            'upload' => true,
            'crop' => false,
            'tab'   => 'General Info'
            //'prefix' => '' // in case you only store the filename in the database, this text will be prepended to the database value
        ]);
        $this->crud->addField([   // Hidden
            'name' => 'applicant_id',
            'type' => 'hidden'
        ]);
        // -----------------
        // Personal tab
        // -----------------
        $this->crud->addField([   // CustomHTML
            'name' => 'pi_head_1',
            'type' => 'custom_html',
            'value' => '<h4>Parent 1</h4>',
            'tab'   => 'Personal Info'
        ]);
        $this->crud->addField([
            'name'  => 'parent_01_type',
            'label' => 'Type',
            'type'  => 'select_from_array',
            'options' => $parent_type_array,
            'allows_null' => true,
            'tab'   => 'Personal Info'
        ]);
        $this->crud->addField([
            'name'  => 'parent_01_full_name',
            'label' => 'Full Name',
            'type'  => 'text',
            'tab'   => 'Personal Info',
        ]);
        $this->crud->addField([
            'name'  => 'parent_01_street',
            'label' => 'Mailing Addres',
            'type'  => 'text',
            'tab'   => 'Personal Info',
        ]);
        $this->crud->addField([
            'name'  => 'parent_01_city',
            'label' => 'City',
            'type'  => 'text',
            'tab'   => 'Personal Info',
        ]);
        $this->crud->addField([
            'name'  => 'parent_01_state',
            'label' => 'State',
            'type'  => 'text',
            'tab'   => 'Personal Info',
        ]);
        $this->crud->addField([
            'name'  => 'parent_01_zip',
            'label' => 'ZIP Code',
            'type'  => 'text',
            'tab'   => 'Personal Info',
        ]);
        $this->crud->addField([   // CustomHTML
            'name' => 'pi_head_2',
            'type' => 'custom_html',
            'value' => '<h4>Parent 2</h4>',
            'tab'   => 'Personal Info'
        ]);
        $this->crud->addField([
            'name'  => 'parent_02_type',
            'label' => 'Type',
            'type'  => 'select_from_array',
            'options' => $parent_type_array,
            'allows_null' => true,
            'tab'   => 'Personal Info'
        ]);
        $this->crud->addField([
            'name'  => 'parent_02_full_name',
            'label' => 'Full Name',
            'type'  => 'text',
            'tab'   => 'Personal Info',
        ]);
        $this->crud->addField([
            'name'  => 'parent_02_street',
            'label' => 'Mailing Addres',
            'type'  => 'text',
            'tab'   => 'Personal Info',
        ]);
        $this->crud->addField([
            'name'  => 'parent_02_city',
            'label' => 'City',
            'type'  => 'text',
            'tab'   => 'Personal Info',
        ]);
        $this->crud->addField([
            'name'  => 'parent_02_state',
            'label' => 'State',
            'type'  => 'text',
            'tab'   => 'Personal Info',
        ]);
        $this->crud->addField([
            'name'  => 'parent_02_zip',
            'label' => 'ZIP Code',
            'type'  => 'text',
            'tab'   => 'Personal Info',
        ]);
        $this->crud->addField([   // CustomHTML
            'name' => 'pi_break_1',
            'type' => 'custom_html',
            'value' => '<hr>',
            'tab'   => 'Personal Info'
        ]);
        $this->crud->addField([
            'name'  => 'citizenship',
            'label' => 'Citizenship',
            'type'  => 'select_from_array',
            'options' => $country_array,
            'allows_null' => true,
            'tab'   => 'Personal Info',
            'model' => 'App\Models\ApplicationPersonal',
        ]);
        $this->crud->addField([
            'name'  => 'race',
            'label' => 'Ethnicity',
            'type'  => 'select_from_array',
            'options' => $race_array,
            'allows_null' => true,
            'tab'   => 'Personal Info',
            'model' => 'App\Models\ApplicationPersonal',
        ]);
        $this->crud->addField([
            'name'  => 'race_other',
            'label' => 'Other Ethnicity',
            'type'  => 'text',
            'tab'   => 'Personal Info',
        ]);
        $this->crud->addField([
            'name'  => 'language_english',
            'label' => 'Is English your primary language?',
            'type'  => 'radio',
            'options' => [
                'Yes' => 'Yes',
                'No' => 'No'
            ],
            'tab'   => 'Personal Info',
            'inline' => true
        ]);
        $this->crud->addField([
            'name'  => 'language_other',
            'label' => 'If no, what is?',
            'type'  => 'text',
            'tab'   => 'Personal Info',
        ]);
        $this->crud->addField([   // CustomHTML
            'name' => 'pi_head_3',
            'type' => 'custom_html',
            'value' => '<hr><h4>Christian Experience</h4>',
            'tab'   => 'Personal Info'
        ]);
        $this->crud->addField([
            'name'  => 'religion',
            'label' => 'What religion were you raised in?',
            'type'  => 'select_from_array',
            'options' => $religion_array,
            'allows_null' => true,
            'tab'   => 'Personal Info'
        ]);
        $this->crud->addField([
            'name'  => 'saved',
            'label' => 'Have you accepted Jesus Christ as your personal Savior?',
            'type'  => 'radio',
            'options' => [
                'Yes' => 'Yes',
                'No' => 'No'
            ],
            'tab'   => 'Personal Info',
            'inline' => true
        ]);
        $this->crud->addField([
            'name'  => 'saved_time',
            'label' => 'When did you get born again?',
            'type'  => 'select_from_array',
            'options' => ['As a child' => 'As a child',
            'As a teen' => 'As a teen',
            'Less than one year ago' => 'Less than one year ago'],
            'allows_null' => true,
            'tab'   => 'Personal Info'
        ]);
        $this->crud->addField([
            'name'  => 'church_name',
            'label' => 'Church Name',
            'type'  => 'text',
            'tab'   => 'Personal Info',
        ]);
        $this->crud->addField([   // CustomHTML
            'name' => 'pi_head_4',
            'type' => 'custom_html',
            'value' => '<br><h3>Church Currently Attending</h3>',
            'tab'   => 'Personal Info'
        ]);
        $this->crud->addField([
            'name'  => 'pastor',
            'label' => 'Pastor',
            'type'  => 'text',
            'tab'   => 'Personal Info',
        ]);
        $this->crud->addField([
            'name'  => 'youth_pastor',
            'label' => 'Youth Pastor',
            'type'  => 'text',
            'tab'   => 'Personal Info',
        ]);
        $this->crud->addField([
            'name'  => 'member',
            'label' => 'How long have you attended this church?',
            'type'  => 'select_from_array',
            'options' => ['A few months' => 'A few months',
            'A few years' => 'A few years',
            'Entire life' => 'Entire life'],
            'allows_null' => true,
            'tab'   => 'Personal Info'
        ]);
        // -----------------
        // Minister tab
        // -----------------
        $this->crud->addField([
            'name'  => 'minister_first_name',
            'label' => 'Minister\'s First Name',
            'type'  => 'text',
            'tab'   => 'Minister Recommendation',
        ]);
        $this->crud->addField([
            'name'  => 'minister_last_name',
            'label' => 'Minister\'s Last Name',
            'type'  => 'text',
            'tab'   => 'Minister Recommendation',
        ]);
        $this->crud->addField([
            'name'  => 'minister_phone',
            'label' => 'Minister\'s Phone Number',
            'type'  => 'text',
            'tab'   => 'Minister Recommendation',
        ]);
        $this->crud->addField([
            'name'  => 'minister_email',
            'label' => 'Minister\'s Email Address',
            'type'  => 'email',
            'tab'   => 'Minister Recommendation',
        ]);
        // -----------------
        // Medical tab
        // -----------------

        // -----------------
        // Financial tab
        // -----------------
        $this->crud->addField([
            'name'  => 'financial_student_signature',
            'label' => 'Student signature on file?',
            'type'  => 'text',
            'tab'   => 'Financial Agreement'
        ]);
        $this->crud->addField([
            'name'  => 'financial_parent_signature',
            'label' => 'Parent signature on file?',
            'type'  => 'text',
            'tab'   => 'Financial Agreement'
        ]);
        // -----------------
        // Liability and Release tab
        // -----------------
        $this->crud->addField([
            'name'  => 'liability_student_signature',
            'label' => 'Student signature on file?',
            'type'  => 'text',
            'tab'   => 'Liability &amp; Release'
        ]);
        $this->crud->addField([
            'name'  => 'liability_parent_signature',
            'label' => 'Parent signature on file?',
            'type'  => 'text',
            'tab'   => 'Liability &amp; Release'
        ]);
        // -----------------
        // Background Check tab
        // -----------------
        $this->crud->addField([
            'name'  => 'convicted',
            'label' => 'Have you ever been convicted of a felony?',
            'type'  => 'radio',
            'options' => [
                'No' => 'No',
                'Yes' => 'Yes'
            ],
            'tab'   => 'Background Check',
            'inline' => true
        ]);
        $this->crud->addField([
            'name'  => 'convicted_reason',
            'label' => 'If yes, explain:',
            'type'  => 'textarea',
            'tab'   => 'Background Check'
        ]);
        $this->crud->addField([
            'name'  => 'convicted_date',
            'label' => 'Date of conviction:',
            'type'  => 'text',
            'tab'   => 'Background Check'
        ]);
        $this->crud->addField([
            'name'  => 'background_signature',
            'label' => 'Student signature on file?',
            'type'  => 'text',
            'tab'   => 'Background Check'
        ]);

        $this->crud->addField([
            'name' => 'cancelled',
            'label' => 'Cancelled',
            'type' => 'checkbox',
            'options'     => [ // the key will be stored in the db, the value will be shown as label;
                        0 => "Not Cancelled",
                        1 => "Cancelled"
                    ],
            'allows_null' => false,
        ], 'update/create/both');

        $this->crud->addColumn([
            'name' => 'id',
            'label' => 'ID'
        ]);




        $this->crud->addField([
            'name'  => 'applicant_id',
            'label' => 'Applicant',
            'type'  => 'select',
            'entity' => 'applicant',
            'attribute' => 'applicant',
            'model' => 'App\Models\Applicant',
            'tab'   => 'General Info',
        ], 'update/create/both');

        $this->crud->addColumn([
            'label' => 'Prospective Applicant',
            'type' => "select",
            'name' => 'applicant_id',
            'entity' => 'applicant',
            'attribute' => 'applicant',
            'model' => 'App\Models\Applicant'
        ]);

        $this->crud->addField([
            'name'  => 'program_id',
            'label' => 'Program',
            'type'  => 'select',
            'entity' => 'program',
            'attribute' => 'program',
            'model' => 'App\Models\Program',
            'tab'   => 'Status',
        ], 'update/create/both');

        $this->crud->addColumn([
            'label' => 'Program',
            'type' => "select",
            'name' => 'program_id',
            'entity' => 'program',
            'attribute' => 'program',
            'model' => 'App\Models\Program'
        ]);

        // ------ CRUD COLUMNS
        // $this->crud->addColumn(); // add a single column, at the end of the stack
        // $this->crud->addColumns(); // add multiple columns, at the end of the stack
        // $this->crud->removeColumn('column_name'); // remove a column from the stack
        // $this->crud->removeColumns(['column_name_1', 'column_name_2']); // remove an array of columns from the stack
        // $this->crud->setColumnDetails('column_name', ['attribute' => 'value']); // adjusts the properties of the passed in column (by name)
        // $this->crud->setColumnsDetails(['column_1', 'column_2'], ['attribute' => 'value']);


        $this->crud->addColumn([
            'name' => 'status',
            'label' => 'Status'
        ]);
        $this->crud->addColumn([
            'name' => 'created_at',
            'label' => 'Created'
        ]);
        $this->crud->addColumn([
            'name' => 'updated_at',
            'label' => 'Updated'
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
        $this->crud->enableDetailsRow();
        $this->crud->allowAccess('details_row');
        $this->crud->setDetailsRowView('vendor.backpack.crud.details_row.application');
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
            'name' => 'archive',
            'label'=> 'Archived'
        ],
        [0 => 'No',1 => 'Yes'],
        function($value) {
            $this->crud->addClause('where', 'cancelled', $value);
        });

        // Add status filter
        $this->crud->addFilter([
            'name' => 'status',
            'type' => 'dropdown',
            'label'=> 'Status'
        ], [
            'Everything in, ready for review' => 'Everything in, ready for review',
            'App received, missing documents' => 'App received, missing documents',
            'No app, other documents received' => 'No app, other documents received',
            'Nothing in, but interested' => 'Nothing in, but interested',
            'Approved' => 'Approved',
            'Pending' => 'Pending',
            'Under Review' => 'Under Review',
            'Not Coming' => 'Not Coming',
        ], function($value) {
            $this->crud->addClause('where', 'status', $value);
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
        $request->request->add(['applicant_id' => uniqid()]);
        $applicant = \App\Models\Applicant::create($request->all());
        $request->request->add(['applicant_id' => $applicant->id]);
        $application = \App\Models\Application::create($request->all());
        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        $application = \App\Models\Application::find($request->id);
        $applicant = \App\Models\Applicant::find($request->applicant_id);
        $applicationGeneral = \App\Models\Applicationgeneral::firstOrCreate(['application_id'=>$request->id]);
        $applicationBackground = \App\Models\Applicationbackground::firstOrCreate(['application_id'=>$request->id]);
        $applicationParent = \App\Models\Applicationparent::firstOrCreate(['application_id'=>$request->id]);
        $applicationPersonal = \App\Models\Applicationpersonal::firstOrCreate(['application_id'=>$request->id]);
        $applicationChurch = \App\Models\Applicationchurch::firstOrCreate(['application_id'=>$request->id]);
        $application->update($request->all());
        $applicant->update($request->all());
        $applicationGeneral->update($request->all());
        $applicationBackground->update($request->all());
        $applicationParent->update($request->all());
        $applicationPersonal->update($request->all());
        $applicationChurch->update($request->all());
        // your additional operations before save here
        $redirect_location = parent::updateCrud();
        // $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
