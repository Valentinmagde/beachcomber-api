<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomAmenityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_amenity', function (Blueprint $table) {
            $table->integer('room_amenity_id', true);
            $table->integer('room_id')->default(0)->index('roomID');
            $table->integer('amenity_sub_type_id')->default(0);
            $table->integer('amenity_id')->default(0)->index('amenityID');
            $table->integer('value')->default(0);
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
        Schema::dropIfExists('room_amenity');
    }
}
