<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_vehicles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type_of_vehicle');
            $table->string('size_of_vehicle');
            $table->integer('number_of_vehicle');
            $table->integer('hight_of_vehicle');

            $table->integer('job_id');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('job_vehicles');
    }
}
