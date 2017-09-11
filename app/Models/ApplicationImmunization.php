<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class ApplicationImmunization extends Model
{
    use CrudTrait;

     /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'tbi_application_immunizations';
    // protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $guarded = ['id'];
    protected $fillable = ['meningococcal_dose_01','meningococcal_dose_02','dtap_dose_01','dtap_dose_02','dtap_dose_03','dtap_dose_04','polio_dose_01','polio_dose_02','polio_dose_03','polio_dose_04','mmr_dose_01','mmr_dose_02','hep_a_dose_01','hep_a_dose_02','hep_b_dose_01','hep_b_dose_02','hep_b_dose_03','varicella_dose_01','varicella_dose_02','varicella_dose_03','immunization_record'];
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
