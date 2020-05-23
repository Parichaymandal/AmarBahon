<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_of_company');
            $table->string('type_of_business');
            $table->string('TIN_number');
            $table->string('trade_license_no');
            $table->string('trade_license_expiry');
            $table->string('importer_registration_no');
            $table->string('company_adress');
            $table->string('telephone_no');
            $table->string('mobile_no');
            $table->string('email');
            $table->string('declaration_of_agreement');

            $table->integer('importer_id');

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
        Schema::drop('companies');
    }
}
