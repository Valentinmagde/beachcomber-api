<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelPmsEndpoint20200213Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_pms_endpoint_20200213', function (Blueprint $table) {
            $table->increments('hotel_pms_endpoint_id');
            $table->unsignedInteger('hotel_id')->unique('hotelID');
            $table->string('hotel_code', 10)->default('na');
            $table->string('hms_endpoint_url')->default('na')->comment('endpoint to interface with HMS');
            $table->string('stl_endpoint_url')->default('na')->comment('endpoint to interface with Starlight');
            $table->tinyInteger('endpoint_for')->default(0)->comment('O-preprod,1-live,2-both');
            $table->string('username')->default('0');
            $table->string('password')->default('0');
            $table->string('hms_username')->default('0');
            $table->string('hms_password')->default('0');
            $table->string('obi_api_endpoint_url')->default('0');
            $table->string('obi_api_username')->default('0');
            $table->string('obi_api_password')->default('0');
            $table->tinyInteger('is_activated')->nullable()->default(0);
            $table->boolean('hms_is_activated')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotel_pms_endpoint_20200213');
    }
}
