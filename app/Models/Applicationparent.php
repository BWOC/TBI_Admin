<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Applicationparent extends Model
{
    use CrudTrait;

     /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'tbi_application_parents';
    protected $primaryKey = 'application_id';
    public $timestamps = true;
    // protected $guarded = ['id'];
    protected $fillable = ['parent_01_type','parent_01_name','parent_01_address_street','parent_01_address_city','parent_01_address_state','parent_01_address_zip','parent_01_phone_home','parent_01_phone_work','parent_01_phone_cell','parent_01_email','parent_02_type','parent_02_name','parent_02_address_street','parent_02_address_city','parent_02_address_state','parent_02_address_zip','parent_02_phone_home','parent_02_phone_work','parent_02_phone_cell','parent_02_email'];
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
