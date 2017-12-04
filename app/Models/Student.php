<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Student extends Model
{
    use CrudTrait;

     /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'tbi_applicants';
    protected $primaryKey = 'applicant_id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    // protected $fillable = [];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    public function getStudentAttribute()
    {
        $applicantId = $this->applicant_id;
        $fullName = $this->first_name . ' ' . $this->last_name;
        return "<b>$fullName</b><br><a href=\"mailto:$this->email_address\">$this->email_address</a><br><i>$this->applicant_id</i>";
    }
    public function getStudentNameAttribute()
    {
        $applicantId = $this->applicant_id;
        $fullName = $this->first_name . ' ' . $this->last_name;
        return "$fullName";
    }
    public function getStudentIDAttribute()
    {
        $applicantId = $this->applicant_id;
        $fullName = $this->first_name . ' ' . $this->last_name;
        return $this->applicant_id;
    }
    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

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
