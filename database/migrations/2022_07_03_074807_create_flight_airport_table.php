<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightAirportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flight_airport', function (Blueprint $table) {
            $table->bigInteger('airport_id', true);
            $table->integer('airport_country_id')->nullable()->default(0);
            $table->integer('flight_booking_market_id')->nullable()->default(0);
            $table->tinyInteger('active')->nullable();
            $table->date('valid_from')->nullable()->default('2016-01-01');
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
        Schema::dropIfExists('flight_airport');
    }
}
