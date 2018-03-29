<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Pass extends Model
{
    use CrudTrait;

     /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'tbi_redeemed_passes';
    //protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = ['pass_type','event_id','student_id','start_date','end_date','remarks','contact'];
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
    public function student()
    {
        return $this->belongsTo('App\Models\Student','student_id','applicant_id');
    }

    // public function relationshipname()
    // {
    //     return $this->belongsTo('App\Models\TheirModelName','YourColumnName','TheirColumnName');
    // }

    public function passregister()
    {
        return $this->belongsTo('App\Models\Passregister','student_id','id');
    }

    public function passtype()
    {
        return $this->belongsTo('App\Models\Passtype','pass_type','id');
    }

    public function passtypelabel()
    {
      return $this->hasOne('App\Models\Passtype','id', 'pass_type');
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
