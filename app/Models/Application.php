<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Application extends Model
{
    use CrudTrait;

     /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'tbi_applications';
    protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $guarded = ['id'];
    protected $fillable = ['program_id','applicant_id','status','cancelled'];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */



    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */


    public function program()
    {
        return $this->belongsTo('App\Models\Program','program_id','id');
    }

    public function applicant()
    {
        return $this->belongsTo('App\Models\Applicant','applicant_id','id');
    }// function (ReferencedModel.id, PresentModel.id)
    public function applicationregistration()
    {
        return $this->hasOne('App\Models\Applicationregistration','id','application_id');
    }
    public function applicationgeneral()
    {
        return $this->hasOne('App\Models\Applicationgeneral','application_id','id');
    }
    public function applicationcharacter()
    {
        return $this->hasOne('App\Models\Applicationcharacter','application_id','id');
    }
    public function applicationchallenges()
    {
        return $this->hasOne('App\Models\Applicationchallenges','application_id','id');
    }
    public function applicationchurch()
    {
        return $this->hasOne('App\Models\Applicationchurch','application_id','id');
    }
    public function applicationdorm()
    {
        return $this->hasOne('App\Models\Applicationdorm','application_id','id');
    }
    public function applicationemployment()
    {
        return $this->hasOne('App\Models\Applicationemployment','application_id','id');
    }
    public function applicationfinancial()
    {
        return $this->hasOne('App\Models\Applicationfinancial','application_id','id');
    }
    public function applicationjob()
    {
        return $this->hasOne('App\Models\Applicationjob','application_id','id');
    }
    public function applicationliability()
    {
        return $this->hasOne('App\Models\Applicationliability','application_id','id');
    }
    public function applicationschool()
    {
        return $this->hasOne('App\Models\Applicationschool','application_id','id');
    }
    public function applicationminister()
    {
        return $this->hasOne('App\Models\Applicationminister','application_id','id');
    }
    public function applicationparent()
    {
        return $this->hasOne('App\Models\Applicationparent','application_id','id');
    }
    public function applicationpersonal()
    {
        return $this->hasOne('App\Models\Applicationpersonal','application_id','id');
    }

    public function applicationmedical()
    {
        return $this->hasOne('App\Models\Applicationmedical','application_id','id');
    }
    public function applicationimmunization()
    {
        return $this->hasOne('App\Models\applicationimmunization','application_id','id');
    }
    public function applicationmedicalcondition()
    {
        return $this->hasOne('App\Models\Applicationmedicalcondition','application_id','id');
    }
    public function applicationmedicalcontact()
    {
        return $this->hasOne('App\Models\Applicationmedicalcontact','application_id','id');
    }
    public function applicationmedicalinsurance()
    {
        return $this->hasOne('App\Models\Applicationmedicalinsurance','application_id','id');
    }
    public function applicationbackground()
    {
        return $this->hasOne('App\Models\Applicationbackground','application_id','id');
    }
    public function applicationvehicle()
    {
        return $this->hasOne('App\Models\Applicationvehicle','application_id','id');
    }

    // public function applicationmedical()
    // {
    //     return $this->hasOne('App\Models\Applicationmedical','application_id','id');
    // }

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */

    public function getFirstNameAttribute()
    {
        return $this->applicant->first_name;
    }
    public function getMiddleNameAttribute()
    {
        if (!empty($this->applicationgeneral->middle_name)) {
            return $this->applicationgeneral->middle_name;
        }
        return false;
    }
    public function getLastNameAttribute()
    {
        return $this->applicant->last_name;
    }
    public function getEmailAddressAttribute()
    {
        if (!empty($this->applicant->email_address)) {
            return $this->applicant->email_address;
        }
        return false;
    }
    public function getStudentEmailAddressAttribute()
    {
        if (!empty($this->applicant->student_email_address)) {
            return $this->applicant->student_email_address;
        }
        return false;
    }
    public function getBirthdateAttribute()
    {
        if (!empty($this->applicant->birthdate)) {
            $birthdate = date_create_from_format('Y-m-d', $this->applicant->birthdate);
            // return $birthdate->format('d\/m\/Y');
            return $birthdate->format('Y-m-d');
        }
        return false;
    }
    public function getSuffixAttribute()
    {
        if (!empty($this->applicationgeneral->suffix)) {
            return $this->applicationgeneral->suffix;
        }
        return false;
    }
    public function getGenderAttribute()
    {
        if (!empty($this->applicationgeneral->gender)) {
            return $this->applicationgeneral->gender;
        }
        return false;
    }
    public function getAddressStreet1Attribute()
    {
        if (!empty($this->applicationgeneral->address_street_1)) {
            return $this->applicationgeneral->address_street_1;
        }
        return false;
    }
    public function getAddressStreet2Attribute()
    {
        if (!empty($this->applicationgeneral->address_street_2)) {
            return $this->applicationgeneral->address_street_2;
        }
        return false;
    }

    public function getAddressCityAttribute()
    {
        if (!empty($this->applicationgeneral->address_city)) {
            return $this->applicationgeneral->address_city;
        }
        return false;
    }

    public function getAddressStateAttribute()
    {
        if (!empty($this->applicationgeneral->address_state)) {
            return $this->applicationgeneral->address_state;
        }
        return false;
    }

    public function getAddressZipAttribute()
    {
        if (!empty($this->applicationgeneral->address_zip)) {
            return $this->applicationgeneral->address_zip;
        }
        return false;
    }

    public function getAddressCountryAttribute()
    {
        if (!empty($this->applicationgeneral->address_country)) {
            return $this->applicationgeneral->address_country;
        }
        return false;
    }

    public function getPhoneNumberAttribute()
    {
        if (!empty($this->applicationgeneral->phone_number)) {
            return $this->applicationgeneral->phone_number;
        }
        return false;
    }

    public function getSsnAttribute()
    {
        if (!empty($this->applicationgeneral->ssn)) {
            return $this->applicationgeneral->ssn;
        }
        return false;
    }
    public function getReferredByAttribute()
    {
        if (!empty($this->applicationgeneral->referred_by)) {
            return $this->applicationgeneral->referred_by;
        }
        return false;
    }


    //Personal
    public function getParent01TypeAttribute()
    {
        if (!empty($this->applicationparent->parent_01_type)) {
            return $this->applicationparent->parent_01_type;
        }
        return false;
    }
    public function getParent01FullNameAttribute()
    {
        if (!empty($this->applicationparent->parent_01_name)) {
            return $this->applicationparent->parent_01_name;
        }
        return false;
    }
    public function getParent01StreetAttribute()
    {
        if (!empty($this->applicationparent->parent_01_address_street)) {
            return $this->applicationparent->parent_01_address_street;
        }
        return false;
    }
    public function getParent01CityAttribute()
    {
        if (!empty($this->applicationparent->parent_01_address_city)) {
            return $this->applicationparent->parent_01_address_city;
        }
        return false;
    }
    public function getParent01StateAttribute()
    {
        if (!empty($this->applicationparent->parent_01_address_state)) {
            return $this->applicationparent->parent_01_address_state;
        }
        return false;
    }
    public function getParent01ZipAttribute()
    {
        if (!empty($this->applicationparent->parent_01_address_zip)) {
            return $this->applicationparent->parent_01_address_zip;
        }
        return false;
    }
    public function getParent02TypeAttribute()
    {
        if (!empty($this->applicationparent->parent_02_type)) {
            return $this->applicationparent->parent_02_type;
        }
        return false;
    }
    public function getParent02FullNameAttribute()
    {
        if (!empty($this->applicationparent->parent_02_name)) {
            return $this->applicationparent->parent_02_name;
        }
        return false;
    }
    public function getParent02StreetAttribute()
    {
        if (!empty($this->applicationparent->parent_02_address_street)) {
            return $this->applicationparent->parent_02_address_street;
        }
        return false;
    }
    public function getParent02CityAttribute()
    {
        if (!empty($this->applicationparent->parent_02_address_city)) {
            return $this->applicationparent->parent_02_address_city;
        }
        return false;
    }
    public function getParent02StateAttribute()
    {
        if (!empty($this->applicationparent->parent_02_address_state)) {
            return $this->applicationparent->parent_02_address_state;
        }
        return false;
    }
    public function getParent02ZipAttribute()
    {
        if (!empty($this->applicationparent->parent_02_address_zip)) {
            return $this->applicationparent->parent_02_address_zip;
        }
        return false;
    }
    public function getCitizenshipAttribute()
    {
        if (!empty($this->applicationpersonal->citizenship)) {
            return $this->applicationpersonal->citizenship;
        }
        return false;
    }
    public function getRaceOtherAttribute()
    {
        if (!empty($this->applicationpersonal->race_other)) {
            return $this->applicationpersonal->race_other;
        }
        return false;
    }
    public function getLanguageEnglishAttribute()
    {
        if (!empty($this->applicationpersonal->language_english)) {
            return $this->applicationpersonal->language_english;
        }
        return false;
    }
    public function getLanguageOtherAttribute()
    {
        if (!empty($this->applicationpersonal->language_other)) {
            return $this->applicationpersonal->language_other;
        }
        return false;
    }
    public function getRaceAttribute()
    {
        if (!empty($this->applicationpersonal->race)) {
            return $this->applicationpersonal->race;
        }
        return false;
    }
    public function getReligionAttribute()
    {
        if (!empty($this->applicationchurch->religion)) {
            return $this->applicationchurch->religion;
        }
        return false;
    }
    public function getSavedAttribute()
    {
        if (!empty($this->applicationchurch->saved)) {
            return $this->applicationchurch->saved;
        }
        return false;
    }
    public function getSavedTimeAttribute()
    {
        if (!empty($this->applicationchurch->saved_time)) {
            return $this->applicationchurch->saved_time;
        }
        return false;
    }
    public function getChurchNameAttribute()
    {
        if (!empty($this->applicationchurch->church_name)) {
            return $this->applicationchurch->church_name;
        }
        return false;
    }
    public function getPastorAttribute()
    {
        if (!empty($this->applicationchurch->pastor)) {
            return $this->applicationchurch->pastor;
        }
        return false;
    }
    public function getYouthPastorAttribute()
    {
        if (!empty($this->applicationchurch->youth_pastor)) {
            return $this->applicationchurch->youth_pastor;
        }
        return false;
    }
    public function getMemberAttribute()
    {
        if (!empty($this->applicationchurch->member)) {
            return $this->applicationchurch->member;
        }
        return false;
    }
    public function getAttendanceAttribute()
    {
        if (!empty($this->applicationchurch->attendance)) {
            return $this->applicationchurch->attendance;
        }
        return false;
    }
    public function getActivitiesAttribute()
    {
        if (!empty($this->applicationchurch->activities)) {
            return $this->applicationchurch->activities;
        }
        return false;
    }
    public function getActivitiesExplanationAttribute()
    {
        if (!empty($this->applicationchurch->activities_explanation)) {
            return $this->applicationchurch->activities_explanation;
        }
        return false;
    }
    // Minister
    public function getMinisterFirstNameAttribute()
    {
        if (!empty($this->applicationminister->first_name)) {
            return $this->applicationminister->first_name;
        }
        return false;
    }
    public function getMinisterLastNameAttribute()
    {
        if (!empty($this->applicationminister->last_name)) {
            return $this->applicationminister->last_name;
        }
        return false;
    }
    public function getMinisterPhoneAttribute()
    {
        if (!empty($this->applicationminister->phone_number)) {
            return $this->applicationminister->phone_number;
        }
        return false;
    }
    public function getMinisterEmailAttribute()
    {
        if (!empty($this->applicationminister->email_address)) {
            return $this->applicationminister->email_address;
        }
        return false;
    }
    // Financial
    public function getFinancialStudentSignatureAttribute()
    {
        if (!empty($this->applicationfinancial->student_signature)) {
            return 'Yes';
        }
        return 'No';
    }
    public function getFinancialParentSignatureAttribute()
    {
        if (!empty($this->applicationfinancial->parent_signature)) {
            return 'Yes';
        }
        return 'No';
    }
    // Liability
    public function getLiabilityStudentSignatureAttribute()
    {
        if (!empty($this->applicationbackground->student_signature)) {
            return 'Yes';
        }
        return 'No';
    }
    public function getLiabilityParentSignatureAttribute()
    {
        if (!empty($this->applicationbackground->parent_signature)) {
            return 'Yes';
        }
        return 'No';
    }
    // Background Check
    public function getConvictedAttribute()
    {
        if (!empty($this->applicationbackground->convicted)) {
            return $this->applicationbackground->convicted;
        }
        return false;
    }
    public function getConvictedReasonAttribute()
    {
        if (!empty($this->applicationbackground->convicted_reason)) {
            return $this->applicationbackground->convicted_reason;
        }
        return false;
    }
    public function getConvictedDateAttribute()
    {
        if (!empty($this->applicationbackground->convicted_date)) {
            return $this->applicationbackground->convicted_date;
        }
        return false;
    }
    public function getBackgroundSignatureAttribute()
    {
        if (!empty($this->applicationbackground->student_signature)) {
            return 'Yes';
        }
        return 'No';
    }

    public function getJobActiveAttribute()
    {
        if(!empty($this->applicationjob->job_active)) {
            return $this->applicationjob->job_active;
        }
        return false;
    }
    public function getJobLocationAttribute()
    {
        if(!empty($this->applicationjob->job_location)) {
            return $this->applicationjob->job_location;
        }
        return false;
    }
    public function getJobContactNameAttribute()
    {
        if(!empty($this->applicationjob->job_contact_name)) {
            return $this->applicationjob->job_contact_name;
        }
        return false;
    }
    public function getJobContactNumberAttribute()
    {
        if(!empty($this->applicationjob->job_contact_number)) {
            return $this->applicationjob->job_contact_number;
        }
        return false;
    }
    public function getJobScheduleAttribute()
    {
        if(!empty($this->applicationjob->job_schedule)) {
            return $this->applicationjob->job_schedule;
        }
        return false;
    }
    //Medical Contact
    public function getMedicalContactFullNameAttribute()
    {
        if(!empty($this->applicationmedicalcontact->first_name)) {
            return $this->applicationmedicalcontact->first_name . ' ' . $this->applicationmedicalcontact->last_name;
        }
        return false;
    }
    public function getMedicalContactFirstNameAttribute()
    {
        if(!empty($this->applicationmedicalcontact->first_name)) {
            return $this->applicationmedicalcontact->first_name;
        }
        return false;
    }
    public function getMedicalContactPhoneAttribute()
    {
        if(!empty($this->applicationmedicalcontact->phone)) {
            return $this->applicationmedicalcontact->phone;
        }
        return false;
    }
    public function getMedicalContactLastNameAttribute()
    {
        if(!empty($this->applicationmedicalcontact->last_name)) {
            return $this->applicationmedicalcontact->last_name;
        }
        return false;
    }
    public function getMedicalContactAddressStreetAttribute()
    {
        if(!empty($this->applicationmedicalcontact->address_street)) {
            return $this->applicationmedicalcontact->address_street;
        }
        return false;
    }
    public function getMedicalContactAddressCityAttribute()
    {
        if(!empty($this->applicationmedicalcontact->address_city)) {
            return $this->applicationmedicalcontact->address_city;
        }
        return false;
    }
    public function getMedicalContactAddressStateAttribute()
    {
        if(!empty($this->applicationmedicalcontact->address_state)) {
            return $this->applicationmedicalcontact->address_state;
        }
        return false;
    }
    public function getMedicalContactAddressZipAttribute()
    {
        if(!empty($this->applicationmedicalcontact->address_zip)) {
            return $this->applicationmedicalcontact->address_zip;
        }
        return false;
    }
    public function getMedicalContactRelationshipAttribute()
    {
        if(!empty($this->applicationmedicalcontact->relationship)) {
            return $this->applicationmedicalcontact->relationship;
        }
        return false;
    }

    public function getVehicleMakeAttribute()
    {
        if(!empty($this->applicationvehicle->vehicle_make)) {
            return $this->applicationvehicle->vehicle_make;
        }
        return false;
    }
    public function getVehicleModelAttribute()
    {
        if(!empty($this->applicationvehicle->vehicle_model)) {
            return $this->applicationvehicle->vehicle_model;
        }
        return false;
    }
    public function getVehicleColorAttribute()
    {
        if(!empty($this->applicationvehicle->vehicle_color)) {
            return $this->applicationvehicle->vehicle_color;
        }
        return false;
    }
    public function getVehicleInsuranceAttribute()
    {
        if(!empty($this->applicationvehicle->vehicle_insurance)) {
            return $this->applicationvehicle->vehicle_insurance;
        }
        return false;
    }
    public function getVehicleLicensePlateAttribute()
    {
        if(!empty($this->applicationvehicle->vehicle_license_plate)) {
            return $this->applicationvehicle->vehicle_license_plate;
        }
        return false;
    }
    public function getVehicleLicenseIdAttribute()
    {
        if(!empty($this->applicationvehicle->vehicle_license_id)) {
            return $this->applicationvehicle->vehicle_license_id;
        }
        return false;
    }
    public function getVehicleLicenseStateAttribute()
    {
        if(!empty($this->applicationvehicle->vehicle_state)) {
            return $this->applicationvehicle->vehicle_state;
        }
        return false;
    }

    public function getCheckedInAttribute()
    {
        if(!empty($this->registration->checked_in)) {
            return $this->registration->checked_in;
        }
        return false;
    }
    public function getInfoConfirmedAttribute()
    {
        if(!empty($this->registration->info_confirmed)) {
            return $this->registration->info_confirmed;
        }
        return false;
    }
    public function getMedicalConfirmedAttribute()
    {
        if(!empty($this->registration->medical_confirmed)) {
            return $this->registration->medical_confirmed;
        }
        return false;
    }
    public function getDormBuildingAttribute()
    {
        if(!empty($this->applicationdorm->dorm_building)) {
            return $this->applicationdorm->dorm_building;
        }
        return 'Not Assigned';
    }
    public function getRoomNumberAttribute()
    {
        if(!empty($this->applicationdorm->room_number)) {
            return $this->applicationdorm->room_number;
        }
        return 'Not Assigned';
    }
    public function getDormNotesAttribute()
    {
        if(!empty($this->applicationdorm->dorm_notes)) {
            return $this->applicationdorm->dorm_notes;
        }
        return false;
    }
    public function getApplicantSummaryAttribute()
    {
        if (!empty($this->applicant->first_name)) {
            return '<img src="'.$this->applicationgeneral->photo.'" width="150" /><br><strong>'.$this->applicant->first_name . ' ' . $this->applicant->last_name . '</strong><br>' . $this->applicationgeneral->address_city . ', ' . $this->applicationgeneral->address_state . ', ' . $this->applicationgeneral->address_country;
        }
        return false;
    }

    public function getPhotoAttribute()
    {
        $profilepicture = $this->applicationgeneral->photo;


        if (!empty($profilepicture)) {
          if(@file_get_contents($profilepicture,0,NULL,0,1))
          {

          }
          else
          {
            $profilepicture = str_replace("https://texasbibleinstitute.org/", "http://tbinetwork.wpengine.com/", $profilepicture);
            if(@file_get_contents($profilepicture,0,NULL,0,1)) {

            } else {
              $profilepicture = "http://127.0.0.1:8000/assets/img/tbilogo.png";
            }

          }
            return $profilepicture;
        }
        return false;
    }

    public function getApplicantApplicationAttribute()
    {
        $prospectiveApplicant = $this->applicant;
        $tbiProgram = $this->program->title;
        $applicationID = $this->id;
        $fullName = $prospectiveApplicant->last_name." ".$prospectiveApplicant->first_name;
        $studentID = $prospectiveApplicant->applicant_id;
        // $applicationStuff = $this->application;
        $profilepicture = $this->applicationgeneral->photo;

        // if(@file_get_contents($profilepicture,0,NULL,0,1))
        // {
        //
        // }
        // else
        // {
        //   $profilepicture = str_replace("https://texasbibleinstitute.org/", "http://tbinetwork.wpengine.com/", $profilepicture);
        //   if(@file_get_contents($profilepicture,0,NULL,0,1)) {
        //
        //   } else {
        //     $profilepicture = "http://127.0.0.1:8000/assets/img/tbilogo.png";
        //   }
        //
        // }
        // $profilepicture = "http://127.0.0.1:8000/assets/img/tbilogo.png";

        // $fullName = $this->last_name . ' ' . $this->first_name;
        // return "<b>$fullName</b><br><a href=\"mailto:$this->student_email_address\">$this->student_email_address</a><br><i>Student ID : $applicantId</i>";
        // return "<div class='row'><div class='col-md-1'><div class='img-circle img-thumbnail'><img src='$profilepicture'></div></div><div class='col-md-11'><b>$fullName</b> | $studentID<br> <i>$tbiProgram</i><br>Application ID : $applicationID</div></div>";
        return "<b>$fullName</b> | $studentID<br> <i>$tbiProgram</i><br>Application ID : $applicationID";
    }

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
