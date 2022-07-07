<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightAirportDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flight_airport_description', function (Blueprint $table) {
            $table->bigInteger('airport_desc_id', true);
            $table->bigInteger('airport_id')->nullable();
            $table->text('airport_name')->nullable();
            $table->tinyInteger('language_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flight_airport_description');
    }
}
