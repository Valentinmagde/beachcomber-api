<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelPackageRoomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_package_room', function (Blueprint $table) {
            $table->bigInteger('hotel_package_room_id', true);
            $table->bigInteger('hotel_package_id')->nullable()->default(0)->index('hotelPackageID');
            $table->integer('room_id')->nullable()->default(0)->index('roomID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotel_package_room');
    }
}
