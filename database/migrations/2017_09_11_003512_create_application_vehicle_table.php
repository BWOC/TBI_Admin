<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationVehicleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         if (Schema::hasTable('tbi_application_vehicle')) {
             //
         }
         else {
             Schema::create('tbi_application_vehicle', function (Blueprint $table) {
                 $table->increments('id');
                 $table->bigInteger('application_id');
                 $table->text('vehicle_make')->nullable();
                 $table->text('vehicle_model')->nullable();
                 $table->text('vehicle_color')->nullable();
                 $table->text('vehicle_insurance')->nullable();
                 $table->text('vehicle_license_plate')->nullable();
                 $table->text('vehicle_license_id')->nullable();
                 $table->text('vehicle_state')->nullable();
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
        Schema::dropIfExists('tbi_application_vehicle');
    }
}
