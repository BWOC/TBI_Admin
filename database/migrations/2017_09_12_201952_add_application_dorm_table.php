<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddApplicationDormTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('tbi_application_dorm')) {
            //
        }
        else {
            Schema::create('tbi_application_dorm', function (Blueprint $table) {
                $table->increments('id');
                $table->bigInteger('application_id');                
                $table->string('dorm_building')->nullable();
                $table->string('room_number')->nullable();
                $table->text('dorm_notes')->nullable();
                $table->timestamps();
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
        Schema::dropIfExists('tbi_application_dorm');
    }
}
