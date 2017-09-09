<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantRegistrationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('tbi_application_registration')) {
            //
        }
        else {
            Schema::create('tbi_application_registration', function (Blueprint $table) {
                $table->increments('id');
                $table->bigInteger('application_id');
                $table->tinyInteger('info_confirmed')->default(0);
                $table->tinyInteger('medical_confirmed')->default(0);
                $table->tinyInteger('checked_in')->default(0);
                $table->text('registration_notes')->nullable();
                $table->timestamps();

                $table->foreign('application_id')->references('id')->on('tbi_applications');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbi_applicant_registration');
    }
}
