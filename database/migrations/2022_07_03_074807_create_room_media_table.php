<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_media', function (Blueprint $table) {
            $table->bigInteger('room_image_id', true);
            $table->integer('room_id')->default(0)->index('roomID');
            $table->string('room_media_name')->default('');
            $table->string('room_media_title')->default('');
            $table->string('room_media_path')->default('');
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
        Schema::dropIfExists('room_media');
    }
}
