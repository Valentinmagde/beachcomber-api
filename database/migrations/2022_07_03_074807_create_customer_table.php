<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->bigInteger('customer_id', true);
            $table->bigInteger('live_crs_customer_id')->default(0);
            $table->bigInteger('local_crs_customer_id')->default(0);
            $table->unsignedTinyInteger('gender_id')->default(0);
            $table->string('gender', 50)->default('na');
            $table->unsignedTinyInteger('title_id')->default(0);
            $table->string('title')->default('na');
            $table->string('surname')->default('na')->index('oceandba_surname_20200304');
            $table->string('othername')->default('na')->index('oceandba_othername_20200304');
            $table->string('email')->default('na');
            $table->string('phone_country_code')->default('na');
            $table->string('phone')->default('na');
            $table->string('mobile_country_code')->default('na');
            $table->string('mobile')->default('na');
            $table->string('fax')->default('na');
            $table->integer('country_id')->default(0)->index('country_id');
            $table->string('country')->default('na')->index('countryname');
            $table->unsignedInteger('nationality_country_id')->default(0);
            $table->string('nationality_country')->default('na');
            $table->string('address')->default('na');
            $table->string('postal_code')->default('na');
            $table->string('town')->default('na');
            $table->integer('language_id')->default(1);
            $table->unsignedInteger('vip_level_id')->default(0);
            $table->string('vip_level')->default('na');
            $table->tinyInteger('is_industry_partner')->default(0);
            $table->tinyInteger('is_travel_agent')->default(0);
            $table->date('date_of_birth')->default('9999-12-31');
            $table->tinyInteger('is_regular_guest')->default(0);
            $table->string('allergy_remarks')->default('na');
            $table->string('handicap_remarks')->default('na');
            $table->string('celebrity_remarks')->default('na');
            $table->string('pms_customer_id')->default('0');
            $table->string('hms_customer_id')->default('0');
            $table->tinyInteger('active')->default(1);
            $table->date('valid_from')->default('9999-12-31');
            $table->date('valid_to')->default('9999-12-31');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer');
    }
}
