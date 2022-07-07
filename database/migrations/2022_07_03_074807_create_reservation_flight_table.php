<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationFlightTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_flight', function (Blueprint $table) {
            $table->bigInteger('reservation_flight_id', true);
            $table->bigInteger('reservation_id');
            $table->integer('airport_id')->nullable();
            $table->string('airport');
            $table->tinyInteger('num_nights');
            $table->date('date_of_departure')->default('9999-12-31');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservation_flight');
    }
}
