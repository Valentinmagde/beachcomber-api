<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerImport1116Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_import_11_16', function (Blueprint $table) {
            $table->bigIncrements('customer_id');
            $table->string('live_crs_customer_id')->nullable();
            $table->string('local_crs_customer_id')->nullable();
            $table->string('gender_id')->nullable();
            $table->string('gender')->nullable();
            $table->string('title')->nullable();
            $table->string('surname')->nullable();
            $table->string('othername')->nullable();
            $table->string('email')->nullable();
            $table->string('phone_country_code')->nullable();
            $table->string('phone')->nullable();
            $table->string('mobile_country_code')->nullable();
            $table->string('mobile')->nullable();
            $table->string('fax')->nullable();
            $table->string('country_id')->nullable();
            $table->string('country_code')->nullable()->index('ccode');
            $table->string('country')->nullable();
            $table->string('address')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('town')->nullable();
            $table->string('language_id')->nullable();
            $table->string('vip_level_id')->nullable();
            $table->string('vip_level')->nullable();
            $table->string('is_industry_partner')->nullable();
            $table->string('is_travel_agent')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('is_regular_guest')->nullable();
            $table->string('allergy_remarks')->nullable();
            $table->string('handicap_remarks')->nullable();
            $table->string('celebrity_remarks')->nullable();
            $table->string('pms_customer_id')->nullable();
            $table->double('hms_customer_id')->nullable();
            $table->string('active')->nullable();
            $table->string('valid_from')->nullable();
            $table->string('valid_to')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_import_11_16');
    }
}
