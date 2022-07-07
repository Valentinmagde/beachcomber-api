<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImageHotelCodeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_hotel_code', function (Blueprint $table) {
            $table->integer('image_hotel_code_id', true);
            $table->integer('hotel_id')->default(15)->index('hotelID');
            $table->integer('country_id')->default(0);
            $table->char('image_code', 3)->default('');
            $table->date('valid_from')->default('2014-01-01');
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
        Schema::dropIfExists('image_hotel_code');
    }
}
