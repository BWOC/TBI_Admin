<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Passregister extends Model
{
    use CrudTrait;

     /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'tbi_passes_summary';
    protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = ['student_id', 'academic_passes', 'event_passes', 'program_id'];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    public function getPassRegisterAttribute()
    {
        $academicPasses = $this->academic_passes;
        $eventPasses = $this->event_passes;
        //$fullName = $this->first_name . ' ' . $this->last_name;
        return "<b>AP<i>$academicPasses</i> | EP<i>$eventPasses</i></b>";
    }

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    public function student()
    {
      return $this->belongsTo('App\Models\Student','student_id', 'applicant_id');
    }

    public function balance()
    {
      return $this->belongsTo('App\Models\Balance','student_id', 'student_id');
    }

    public function pass()
    {
        return $this->hasMany('App\Models\Payment','student_id', 'student_id');
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
