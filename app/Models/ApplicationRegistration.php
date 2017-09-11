<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class ApplicationRegistration extends Model
{
    use CrudTrait;

     /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'tbi_application_registration';
    protected $primaryKey = 'id';
    public $timestamps = true;
    //protected $guarded = [];
    protected $fillable = ['application_id','info_confirmed','medical_confirmed','checked_in','registration_notes'];
    // protected $hidden = [];
    // protected $dates = [];
    protected $casts = [ 'info_confirmed' => 'boolean', 'medical_confirmed' => 'boolean', 'checked_in' => 'boolean' ];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    public function getCheckedInSummaryAttribute()
    {
        if ($this->attributes['checked_in']) {
            return 'Yes';
        }
        return 'No';
    }

    public function getInfoConfirmedSummaryAttribute()
    {
        if ($this->attributes['info_confirmed']) {
            return 'Yes';
        }
        return 'No';
    }
    public function getMedicalConfirmedSummaryAttribute()
    {
        if ($this->attributes['medical_confirmed']) {
            return 'Yes';
        }
        return 'No';
    }

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    
    public function application()
    {
        return $this->belongsTo('App\Models\Application','application_id','id');
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
