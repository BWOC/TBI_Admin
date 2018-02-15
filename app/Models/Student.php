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

    public function balance()
    {
      return $this->hasOne('App\Models\Balance','student_id', 'applicant_id');
    }
    public function payments()
    {
        return $this->hasMany('App\Models\Payment');
    }

    public function passregister()
    {
      return $this->hasOne('App\Models\Passregister','id', 'applicant_id');
    }

    public function getStudentAttribute()
    {
        $applicantId = $this->applicant_id;
        $fullName = $this->first_name . ' ' . $this->last_name;
        return "<b>$fullName</b><br><a href=\"mailto:$this->student_email_address\">$this->student_email_address</a><br><i>Student ID : $applicantId</i>";
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
        //$balance = Student::find(1)->balance;
        // $balancefigure = Balance::find(1)->account_balance;
        //$balance = $this->hasOne('App\Models\Balance','student_id', 'applicant_id');
        // $balancefigure = $this->first_name;
        $applicantId = $this->applicant_id;
        $fullName = $this->first_name . ' ' . $this->last_name;
        //$studentBalance = $this->belongsToMany('App\Models\Balance','applicant_id','id');
        //$studentBalance = Balance::find($this->applicant_id)->account_balance;

        // $balancefigure = $this->account_balance;
        //$balancefigure = Balance::find($applicantId)->account_balance;
        $balanceEntry = $this->balance;
        $balancefigure = $balanceEntry->account_balance;

        // $remainingAcademicPasses = Passregister::find($applicantId)->academic_passes;
        // $remainingEventPasses = Passregister::find($applicantId)->event_passes;

        return "<b>$fullName</b><br><a href=\"mailto:$this->student_email_address\">$this->student_email_address</a><br><i>$this->applicant_id</i>  <br> Balance : <b>$$balancefigure</b>";
    }

    public function getStudentPassesAttribute()
    {
        $applicantId = $this->applicant_id;
        $fullName = $this->first_name . ' ' . $this->last_name;

        // $academicPasses = Passregister::find($this->applicant_id)->academic_passes;
        // $eventPasses = Passregister::find($this->applicant_id)->event_passes;
        $passRegisters = $this->passregister;

        $academicPasses = $passRegisters->academic_passes;
        $eventPasses = $passRegisters->event_passes;
        $funPasses = $passRegisters->fun_passes;
        $customPasses = $passRegisters->custom_passes;

        //return "<b>$fullName</b><br><a href=\"mailto:$this->student_email_address\">$this->student_email_address</a><br>AP<i>$academicPasses</i> | EP<i>$eventPasses</i>";
        return "<b>$fullName</b><br><a href=\"mailto:$this->student_email_address\">$this->student_email_address</a><br>A : <b>$academicPasses</b> | E :<b>$eventPasses</b> | F : <b>$funPasses</b> | C : <b>$customPasses</b>";
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
