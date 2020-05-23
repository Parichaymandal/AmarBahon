<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehicleOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_owners', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_of_owner');
            $table->string('NIDno');
            $table->string('union_membership_no');
            $table->date('date_of_birth');
            $table->string('email');
            $table->string('address');
            $table->string('phone');
            $table->string('mobile');
            $table->integer('user_id');
            $table->string('declaration_of_agreement');


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
        Schema::drop('vehicle_owners');
    }
}
