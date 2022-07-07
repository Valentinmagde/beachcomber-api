<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomAvailabilityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_availability', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pms_property_code', 8);
            $table->unsignedTinyInteger('hotel_id');
            $table->string('pms_room_code', 8);
            $table->unsignedBigInteger('room_id');
            $table->text('htng_unique_id')->nullable();
            $table->date('start');
            $table->date('end');
            $table->timestamp('updated')->useCurrent();
            $table->timestamp('created')->useCurrent();
            $table->bigInteger('no_available')->default(0);
            $table->timestamp('pms_timestamp')->nullable();

            $table->index(['start', 'room_id'], 'oceandba_start_room_id_20200304');
            $table->unique(['hotel_id', 'room_id', 'start'], 'unique_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('room_availability');
    }
}
