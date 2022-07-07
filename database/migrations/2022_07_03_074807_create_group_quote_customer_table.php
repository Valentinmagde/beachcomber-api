<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupQuoteCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_quote_customer', function (Blueprint $table) {
            $table->double('group_customer_id');
            $table->string('title', 765)->nullable();
            $table->string('surname', 765)->nullable();
            $table->string('othername', 765)->nullable();
            $table->string('email', 765)->nullable();
            $table->string('phone_country_code', 765)->nullable();
            $table->string('phone', 765)->nullable();
            $table->string('mobile_country_code', 765)->nullable();
            $table->string('mobile', 765)->nullable();
            $table->string('fax', 765)->nullable();
            $table->double('country_id')->nullable();
            $table->string('country', 765)->nullable();
            $table->string('address', 765)->nullable();
            $table->string('postal_code', 765)->nullable();
            $table->string('town', 765)->nullable();
            $table->double('language_id')->nullable();
            $table->tinyInteger('is_industry_partner')->nullable();
            $table->tinyInteger('is_travel_agent')->nullable();
            $table->tinyInteger('active')->nullable();
            $table->date('valid_from')->nullable();
            $table->date('valid_to')->nullable()->default('9999-12-31');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('group_quote_customer');
    }
}
