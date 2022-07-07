<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightBookingHandlerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flight_booking_handler', function (Blueprint $table) {
            $table->bigInteger('flight_booking_handler_id', true);
            $table->string('flight_booking_handler')->nullable();
            $table->tinyInteger('is_via_email')->nullable()->default(1);
            $table->string('email')->nullable();
            $table->tinyInteger('is_via_api')->nullable()->default(0);
            $table->text('api_details')->nullable();
            $table->tinyInteger('active')->nullable()->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flight_booking_handler');
    }
}
