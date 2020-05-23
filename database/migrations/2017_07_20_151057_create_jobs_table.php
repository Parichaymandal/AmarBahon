<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_of_importer');
            $table->string('product');
            $table->integer('amount_of_goods');
            $table->string('type_of_vehicle');
            $table->string('number_of_vehicle');
            $table->string('pick_up_zone');
            $table->string('pick_up_address');
            $table->string('destination');
            $table->string('address');
            $table->date('date_of_transport');
            $table->string('reference_no');
            $table->integer('status');
            $table->time('pick_up_time');
            $table->time('reaching_time');

            $table->integer('company_id');

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
        Schema::drop('jobs');
    }
}
