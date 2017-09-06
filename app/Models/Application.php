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
    //protected $guarded = [];
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
    }
    public function applicationGeneral()
    {
        return $this->hasOne('App\Models\ApplicationGeneral','application_id','id');
    }
    public function applicationBackground()
    {
        return $this->hasOne('App\Models\ApplicationBackground','application_id','id');
    }
    public function applicationFinancial()
    {
        return $this->hasOne('App\Models\ApplicationFinancial','application_id','id');
    }
    public function applicationLiability()
    {
        return $this->hasOne('App\Models\ApplicationLiability','application_id','id');
    }
    public function applicationParents()
    {
        return $this->hasOne('App\Models\ApplicationParents','application_id','id');
    }
    public function applicationPersonal()
    {
        return $this->hasOne('App\Models\ApplicationPersonal','application_id','id');
    }
    public function applicationChurch()
    {
        return $this->hasOne('App\Models\ApplicationChurch','application_id','id');
    }
    public function applicationMinister()
    {
        return $this->hasOne('App\Models\ApplicationMinister','application_id','id');
    }
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
        if (!empty($this->applicationGeneral->middle_name)) {
            return $this->applicationGeneral->middle_name;
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
    public function getBirthdateAttribute()
    {
        if (!empty($this->applicant->birthdate)) {
            $birthdate = date_create_from_format('Y-m-d', $this->applicant->birthdate);
            return $birthdate->format('d\/m\/Y');
        }
        return false;  
    }
    public function getSuffixAttribute()
    {
        if (!empty($this->applicationGeneral->suffix)) {
            return $this->applicationGeneral->suffix;
        }
        return false;  
    }
    public function getGenderAttribute()
    {
        if (!empty($this->applicationGeneral->gender)) {
            return $this->applicationGeneral->gender;
        }
        return false;  
    }
    public function getAddressStreet1Attribute()
    {
        if (!empty($this->applicationGeneral->address_street_1)) {
            return $this->applicationGeneral->address_street_1;
        }
        return false;  
    }
    public function getAddressStreet2Attribute()
    {
        if (!empty($this->applicationGeneral->address_street_2)) {
            return $this->applicationGeneral->address_street_2;
        }
        return false;  
    }
    public function getAddressCityAttribute()
    {
        if (!empty($this->applicationGeneral->address_city)) {
            return $this->applicationGeneral->address_city;
        }
        return false;  
    }
    public function getAddressStateAttribute()
    {
        if (!empty($this->applicationGeneral->address_state)) {
            return $this->applicationGeneral->address_state;
        }
        return false;  
    }
    public function getAddressZipAttribute()
    {
        if (!empty($this->applicationGeneral->address_zip)) {
            return $this->applicationGeneral->address_zip;
        }
        return false;  
    }
    public function getAddressCountryAttribute()
    {
        if (!empty($this->applicationGeneral->address_country)) {
            return $this->applicationGeneral->address_country;
        }
        return false;  
    }
    public function getPhoneNumberAttribute()
    {
        if (!empty($this->applicationGeneral->phone_number)) {
            return $this->applicationGeneral->phone_number;
        }
        return false;  
    }
    public function getSsnAttribute()
    {
        if (!empty($this->applicationGeneral->ssn)) {
            return $this->applicationGeneral->ssn;
        }
        return false;  
    }
    public function getReferredByAttribute()
    {
        if (!empty($this->applicationGeneral->referred_by)) {
            return $this->applicationGeneral->referred_by;
        }
        return false;  
    }
    public function getPhotoAttribute()
    {
        if (!empty($this->applicationGeneral->photo)) {
            return $this->applicationGeneral->photo;
        }
        return false;  
    }
    //Personal
    public function getParent01TypeAttribute()
    {
        if (!empty($this->applicationParents->parent_01_type)) {
            return $this->applicationParents->parent_01_type;
        }
        return false;  
    }  
    public function getParent01FullNameAttribute()
    {
        if (!empty($this->applicationParents->parent_01_name)) {
            return $this->applicationParents->parent_01_name;
        }
        return false;  
    }    
    public function getParent01StreetAttribute()
    {
        if (!empty($this->applicationParents->parent_01_address_street)) {
            return $this->applicationParents->parent_01_address_street;
        }
        return false;  
    } 
    public function getParent01CityAttribute()
    {
        if (!empty($this->applicationParents->parent_01_address_city)) {
            return $this->applicationParents->parent_01_address_city;
        }
        return false;  
    }  
    public function getParent01StateAttribute()
    {
        if (!empty($this->applicationParents->parent_01_address_state)) {
            return $this->applicationParents->parent_01_address_state;
        }
        return false;  
    }  
    public function getParent01ZipAttribute()
    {
        if (!empty($this->applicationParents->parent_01_address_zip)) {
            return $this->applicationParents->parent_01_address_zip;
        }
        return false;  
    }
    public function getParent02TypeAttribute()
    {
        if (!empty($this->applicationParents->parent_02_type)) {
            return $this->applicationParents->parent_02_type;
        }
        return false;  
    }  
    public function getParent02FullNameAttribute()
    {
        if (!empty($this->applicationParents->parent_02_name)) {
            return $this->applicationParents->parent_02_name;
        }
        return false;  
    }    
    public function getParent02StreetAttribute()
    {
        if (!empty($this->applicationParents->parent_02_address_street)) {
            return $this->applicationParents->parent_02_address_street;
        }
        return false;  
    } 
    public function getParent02CityAttribute()
    {
        if (!empty($this->applicationParents->parent_02_address_city)) {
            return $this->applicationParents->parent_02_address_city;
        }
        return false;  
    }  
    public function getParent02StateAttribute()
    {
        if (!empty($this->applicationParents->parent_02_address_state)) {
            return $this->applicationParents->parent_02_address_state;
        }
        return false;  
    }  
    public function getParent02ZipAttribute()
    {
        if (!empty($this->applicationParents->parent_02_address_zip)) {
            return $this->applicationParents->parent_02_address_zip;
        }
        return false;  
    } 
    public function getCitizenshipAttribute()
    {
        if (!empty($this->applicationPersonal->citizenship)) {
            return $this->applicationPersonal->citizenship;
        }
        return false;  
    } 
    public function getRaceOtherAttribute()
    {
        if (!empty($this->applicationPersonal->race_other)) {
            return $this->applicationPersonal->race_other;
        }
        return false;  
    } 
    public function getLanguageEnglishAttribute()
    {
        if (!empty($this->applicationPersonal->language_english)) {
            return $this->applicationPersonal->language_english;
        }
        return false;  
    } 
    public function getLanguageOtherAttribute()
    {
        if (!empty($this->applicationPersonal->language_other)) {
            return $this->applicationPersonal->language_other;
        }
        return false;  
    } 
    public function getRaceAttribute()
    {
        if (!empty($this->applicationPersonal->race)) {
            return $this->applicationPersonal->race;
        }
        return false;  
    } 
    public function getReligionAttribute()
    {
        if (!empty($this->applicationChurch->religion)) {
            return $this->applicationChurch->religion;
        }
        return false;  
    } 
    public function getSavedAttribute()
    {
        if (!empty($this->applicationChurch->saved)) {
            return $this->applicationChurch->saved;
        }
        return false;  
    } 
    public function getSavedTimeAttribute()
    {
        if (!empty($this->applicationChurch->saved_time)) {
            return $this->applicationChurch->saved_time;
        }
        return false;  
    } 
    public function getChurchNameAttribute()
    {
        if (!empty($this->applicationChurch->church_name)) {
            return $this->applicationChurch->church_name;
        }
        return false;  
    } 
    public function getPastorAttribute()
    {
        if (!empty($this->applicationChurch->pastor)) {
            return $this->applicationChurch->pastor;
        }
        return false;  
    } 
    public function getYouthPastorAttribute()
    {
        if (!empty($this->applicationChurch->youth_pastor)) {
            return $this->applicationChurch->youth_pastor;
        }
        return false;  
    } 
    public function getMemberAttribute()
    {
        if (!empty($this->applicationChurch->member)) {
            return $this->applicationChurch->member;
        }
        return false;  
    } 
    public function getAttendanceAttribute()
    {
        if (!empty($this->applicationChurch->attendance)) {
            return $this->applicationChurch->attendance;
        }
        return false;  
    } 
    public function getActivitiesAttribute()
    {
        if (!empty($this->applicationChurch->activities)) {
            return $this->applicationChurch->activities;
        }
        return false;  
    } 
    public function getActivitiesExplanationAttribute()
    {
        if (!empty($this->applicationChurch->activities_explanation)) {
            return $this->applicationChurch->activities_explanation;
        }
        return false;  
    } 
    // Minister
    public function getMinisterFirstNameAttribute()
    {
        if (!empty($this->applicationMinister->first_name)) {
            return $this->applicationMinister->first_name;
        }
        return false;  
    }
    public function getMinisterLastNameAttribute()
    {
        if (!empty($this->applicationMinister->last_name)) {
            return $this->applicationMinister->last_name;
        }
        return false;  
    }
    public function getMinisterPhoneAttribute()
    {
        if (!empty($this->applicationMinister->phone_number)) {
            return $this->applicationMinister->phone_number;
        }
        return false;  
    }
    public function getMinisterEmailAttribute()
    {
        if (!empty($this->applicationMinister->email_address)) {
            return $this->applicationMinister->email_address;
        }
        return false;  
    }
    // Financial
    public function getFinancialStudentSignatureAttribute()
    {
        if (!empty($this->applicationFinancial->student_signature)) {
            return 'Yes';
        }
        return 'No';  
    }
    public function getFinancialParentSignatureAttribute()
    {
        if (!empty($this->applicationFinancial->parent_signature)) {
            return 'Yes';
        }
        return 'No';  
    }   
    // Liability
    public function getLiabilityStudentSignatureAttribute()
    {
        if (!empty($this->applicationBackground->student_signature)) {
            return 'Yes';
        }
        return 'No';  
    }
    public function getLiabilityParentSignatureAttribute()
    {
        if (!empty($this->applicationBackground->parent_signature)) {
            return 'Yes';
        }
        return 'No';  
    }
    // Background Check
    public function getConvictedAttribute()
    {
        if (!empty($this->applicationBackground->convicted)) {
            return $this->applicationBackground->convicted;
        }
        return false;  
    }
    public function getConvictedReasonAttribute()
    {
        if (!empty($this->applicationBackground->convicted_reason)) {
            return $this->applicationBackground->convicted_reason;
        }
        return false;  
    }
    public function getConvictedDateAttribute()
    {
        if (!empty($this->applicationBackground->convicted_date)) {
            return $this->applicationBackground->convicted_date;
        }
        return false;  
    }
    public function getBackgroundSignatureAttribute()
    {
        if (!empty($this->applicationBackground->student_signature)) {
            return 'Yes';
        }
        return 'No';  
    }
    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
    public function setPhotoAttribute($value)
    {
        $attribute_name = "photo";
        $disk = "public";
        $destination_path = "images";

        // if the image was erased
        if ($value==null) {
            // delete the image from disk
            \Storage::disk($disk)->delete($this->image);

            // set null in the database column
            $this->attributes[$attribute_name] = null;
        }

        // if a base64 was sent, store it in the db
        if (starts_with($value, 'data:image'))
        {
            // 0. Make the image
            $image = \Image::make($value);
            // 1. Generate a filename.
            $filename = md5($value.time()).'.jpg';
            // 2. Store the image on disk.
            \Storage::disk($disk)->put($destination_path.'/'.$filename, $image->stream());
            // 3. Save the path to the database
            $this->attributes[$attribute_name] = $destination_path.'/'.$filename;
        }
    }
}
