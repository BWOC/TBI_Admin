<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationJobTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         if (Schema::hasTable('tbi_application_job')) {
             //
         }
         else {
             Schema::create('tbi_application_job', function (Blueprint $table) {
                 $table->increments('id');
                 $table->bigInteger('application_id');
                 $table->tinyInteger('job_active')->default(0);
                 $table->text('job_location')->nullable();
                 $table->text('job_contact_name')->nullable();
                 $table->text('job_contact_number')->nullable();
                 $table->text('job_schedule')->nullable();
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
        Schema::dropIfExists('tbi_application_job');
    }
}
