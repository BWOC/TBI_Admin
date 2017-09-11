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
    protected $guarded = ['id','applicant_id'];
    protected $fillable = ['first_name','last_name','email_address','birthdate'];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    public function getFullNameAttribute() 
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function getApplicantAttribute() 
    {
        $applicantId = $this->applicant_id;
        $fullName = $this->first_name . ' ' . $this->last_name;
        return "$fullName<br>Applicant ID: $applicantId<br><a href=\"mailto:$this->email_address\">$this->email_address</a>";
    }
    
    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function application() {
        return $this->hasOne('App\Models\Application','applicant_id','id');
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
