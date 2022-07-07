<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfferRoomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offer_room', function (Blueprint $table) {
            $table->bigInteger('offer_room_id', true);
            $table->bigInteger('offer_id')->nullable()->default(0)->index('offer_id');
            $table->integer('room_id')->nullable()->default(0)->index('room_id');

            $table->index(['offer_id', 'room_id'], 'offer_room_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offer_room');
    }
}
