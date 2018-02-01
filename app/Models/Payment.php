<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Payment extends Model
{
    use CrudTrait;

     /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'tbi_applicants_payments';
    protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = ['student_id','program_id','paid_date', 'payment_type','description', 'amount'];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    // 
    // /**
    //  * Stores the user id at each create & update.
    //  */
    // public function save(array $options = [])
    // {
    //
    //
    //     $currentPayment = $this->amount;
    //
    //     //Pull the pre-existing student balance
    //     $studentBalance = $this->balance;
    //     $studentBalanceFigure = $studentBalance->account_balance;
    //
    //     //Calculate new balance
    //     $studentBalanceFigure = $studentBalanceFigure + $currentPayment;
    //
    //     //Update the Student's Balance with the newly calulated balances
    //     $studentBalance->account_balance = $studentBalanceFigure;
    //
    //     //Push the updated balance to the student balance table
    //     // $studentBalance->balances()->update($studentBalance);
    //     // $studentBalance->update($studentBalance);
    //     $this->balance = $studentBalance;
    //
    //     parent::save();
    // }

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    public function student()
    {
        return $this->belongsTo('App\Models\Student','student_id','applicant_id');
    }

    // protected $touches = ['balance'];

    public function balance()
    {
        return $this->belongsTo('App\Models\Balance','student_id','id');
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
