<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Balance extends Model
{
    use CrudTrait;

     /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'tbi_applicants_account_balance';
    protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = ['student_id','program_id', 'account_balance'];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    public function getBalanceAttribute()
    {
        $balance = $this->account_balance;
        //$fullName = $this->first_name . ' ' . $this->last_name;
        return "$$balance";
    }

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    public function student()
    {
        return $this->belongsTo('App\Models\Student','student_id','applicant_id');
    }
    public function balance()
    {
      return $this->account_balance;
    }
    public function studentBalance()
    {
        return $this->belongsTo('App\Models\Student','student_id','applicant_id');
    }

    public function program()
    {
        return $this->belongsTo('App\Models\Program','program_id','id');
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
