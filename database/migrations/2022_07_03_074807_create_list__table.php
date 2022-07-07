<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list$', function (Blueprint $table) {
            $table->string('customer_id')->nullable();
            $table->string('live_crs_customer_id')->nullable();
            $table->string('local_crs_customer_id')->nullable();
            $table->tinyInteger('gender_id')->nullable()->default(0);
            $table->string('gender')->nullable();
            $table->string('title')->nullable();
            $table->string('surname')->nullable();
            $table->string('othername')->nullable();
            $table->string('email')->nullable()->default('na');
            $table->string('phone_country_code')->nullable();
            $table->string('phone')->nullable();
            $table->string('mobile_country_code')->nullable();
            $table->string('mobile')->nullable();
            $table->string('fax')->nullable();
            $table->tinyInteger('country_id')->nullable();
            $table->string('country')->nullable();
            $table->string('address')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('town')->nullable();
            $table->tinyInteger('language_id')->nullable();
            $table->tinyInteger('vip_level_id')->nullable();
            $table->string('vip_level')->nullable();
            $table->string('is_industry_partner')->nullable();
            $table->string('is_travel_agent')->nullable();
            $table->string('dob')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->text('is_regular_guest')->nullable();
            $table->string('allergy_remarks')->nullable();
            $table->string('handicap_remarks')->nullable();
            $table->string('celebrity_remarks')->nullable();
            $table->string('pms_customer_id')->nullable();
            $table->bigInteger('hms_customer_id')->nullable();
            $table->tinyInteger('active')->nullable();
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
        Schema::dropIfExists('list$');
    }
}
