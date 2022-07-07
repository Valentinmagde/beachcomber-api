<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupQuoteRoomRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_quote_room_request', function (Blueprint $table) {
            $table->double('group_quote_room_request_id')->unique('group_quote_room_request_id');
            $table->double('quote_id')->nullable();
            $table->double('hotel_id')->nullable();
            $table->double('room_id')->nullable();
            $table->double('is_main')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('group_quote_room_request');
    }
}
