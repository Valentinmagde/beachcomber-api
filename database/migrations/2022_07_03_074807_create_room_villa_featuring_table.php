<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomVillaFeaturingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_villa_featuring', function (Blueprint $table) {
            $table->bigInteger('room_villa_feature_id', true);
            $table->integer('hotel_id')->default(0)->index('hotelID');
            $table->integer('room_id')->nullable()->index('roomID');
            $table->tinyInteger('rank')->nullable()->default(0);
            $table->date('valid_from')->nullable()->default('2015-01-01');
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
        Schema::dropIfExists('room_villa_featuring');
    }
}
