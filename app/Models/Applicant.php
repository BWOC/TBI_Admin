<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Applicant extends Model
{
    use CrudTrait;

     /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'tbi_applicants';
    protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $guarded = ['id'];
    protected $fillable = ['first_name','last_name','email_address','student_email_address','birthdate'];
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

    public function application()
    {
      return $this->hasOne('App\Models\Application','applicant_id', 'id');
    }
    // function (ReferencedModel.id, PresentModel.id)

    public function getApplicantThumbnailAttribute()
    {
      $profilepicture = $this->application->applicationgeneral;
      if (!empty($profilepicture->photo)) {
        # code...
        $profilepicture = $profilepicture->photo;
        $profilepicture = str_replace("https://texasbibleinstitute.org/", "http://tbinetwork.wpengine.com/", $profilepicture);
      } else {
        # code...
        // $profilepicture = $applicantId;
        $profilepicture = "https://texasbibleinstitute.org/wp-content/uploads/2017/06/TBI17-WebsiteLOGO.png";
      }
    }

    public function getApplicantAttribute()
    {
        $applicantId = $this->applicant_id;


        $fullName = $this->last_name . ' ' . $this->first_name;
        // return "<b>$fullName</b><br><a href=\"mailto:$this->student_email_address\">$this->student_email_address</a><br><i>Student ID : $applicantId</i>";
        return "<b>$fullName</b><br>$applicantId";
    }



    public function getApplicantNameAttribute()
    {
        $applicantId = $this->id;

        $fullName = $this->first_name . ' ' . $this->last_name;
        return "$fullName";
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



    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
