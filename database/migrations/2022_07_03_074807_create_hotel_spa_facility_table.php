<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelSpaFacilityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_spa_facility', function (Blueprint $table) {
            $table->integer('hotel_spa_facility_id', true);
            $table->integer('hotel_spa_id')->default(0)->index('hotelSpaID');
            $table->integer('facility_id')->default(0);
            $table->smallInteger('quantity')->default(0);
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
        Schema::dropIfExists('hotel_spa_facility');
    }
}
