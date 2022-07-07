<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomAllotmentStatusLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_allotment_status_log', function (Blueprint $table) {
            $table->integer('temp_id', true);
            $table->date('temp_date');
            $table->integer('temp_user');
            $table->integer('temp_hotel');
            $table->integer('temp_room');
            $table->text('temp_data')->nullable();
            $table->date('date_from');
            $table->date('date_to');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('room_allotment_status_log');
    }
}
