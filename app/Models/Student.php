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

    public function getStudentBalanceAttribute()
    {
        $applicantId = $this->applicant_id;
        $fullName = $this->first_name . ' ' . $this->last_name;
        //$studentBalance = $this->belongsToMany('App\Models\Balance','applicant_id','id');
        $studentBalance = Balance::find($this->applicant_id)->account_balance;
        return "<b>$fullName</b><br><a href=\"mailto:$this->email_address\">$this->email_address</a><br><i>$this->applicant_id</i> | $studentBalance";
    }

    public function getStudentPassesAttribute()
    {
        $applicantId = $this->applicant_id;
        $fullName = $this->first_name . ' ' . $this->last_name;

        // $academicPasses = Passregister::find($this->applicant_id)->academic_passes;
        // $eventPasses = Passregister::find($this->applicant_id)->event_passes;
        $academicPasses = "0";
        $eventPasses = "0";
        //return "<b>$fullName</b><br><a href=\"mailto:$this->email_address\">$this->email_address</a><br>AP<i>$academicPasses</i> | EP<i>$eventPasses</i>";
        return "<b>$fullName</b><br><a href=\"mailto:$this->email_address\">$this->email_address</a><br><i>$this->applicant_id</i>";
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
