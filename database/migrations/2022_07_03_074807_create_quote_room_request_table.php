<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuoteRoomRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quote_room_request', function (Blueprint $table) {
            $table->bigInteger('quote_room_request_id', true);
            $table->unsignedBigInteger('quote_id')->index('quoteID');
            $table->integer('hotel_id');
            $table->integer('room_id')->index('roomID');
            $table->integer('is_main')->nullable()->default(0)->index('isMain');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quote_room_request');
    }
}
