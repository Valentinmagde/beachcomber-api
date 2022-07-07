<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelSpaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_spa', function (Blueprint $table) {
            $table->integer('hotel_spa_id', true)->unique('hotel_spa_id');
            $table->integer('spa_id')->default(0)->index('SpaID');
            $table->integer('hotel_id')->default(0)->index('hotelID');
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
        Schema::dropIfExists('hotel_spa');
    }
}
