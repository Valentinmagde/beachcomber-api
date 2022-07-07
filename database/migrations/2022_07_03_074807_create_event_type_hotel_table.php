<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventTypeHotelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_type_hotel', function (Blueprint $table) {
            $table->bigInteger('event_hotel_id', true);
            $table->integer('hotel_id')->nullable();
            $table->integer('event_type_id')->nullable();
            $table->date('min_date')->default('9999-12-31');
            $table->date('max_date')->default('9999-12-31');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_type_hotel');
    }
}
