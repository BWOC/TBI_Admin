<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Applicationgeneral extends Model
{
    use CrudTrait;

     /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'tbi_application_general';
    protected $primaryKey = 'application_id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = ['application_id','prefix','middle_name','suffix','preferred_name','gender','address_street_1','address_street_2','address_city','address_state','address_zip','address_country','phone_number','ssn','referred_by','photo'];
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
        return $this->belongsTo('App\Models\Application','id','application_id');//This works! function (ReferencedModel.id, PresentModel.id)
    }

    public function applicant()
    {
        return $this->belongsTo('App\Models\Applicant','application_id','id');
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
