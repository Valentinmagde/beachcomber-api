<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_company', function (Blueprint $table) {
            $table->bigInteger('customer_company_id', true);
            $table->integer('customer_id')->default(0)->index('custID');
            $table->string('company_position')->default('na');
            $table->string('company_name')->default('na');
            $table->string('company_type')->default('na');
            $table->string('company_director_surname')->default('na');
            $table->string('company_director_firstname')->default('na');
            $table->string('company_director_email')->default('na');
            $table->string('company_code')->default('na');
            $table->string('company_street')->default('na');
            $table->string('company_country')->default('na');
            $table->string('company_phone')->default('na');
            $table->string('company_fax')->default('na');
            $table->string('company_email')->default('na');
            $table->string('company_website')->default('na');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_company');
    }
}
