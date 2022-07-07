<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomAllotmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_allotment', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->integer('hotel_id')->default(0)->index('hotelID');
            $table->integer('room_id')->default(0)->index('roomID');
            $table->string('previous_action_type', 5)->default('None');
            $table->string('action_type', 5)->default('None');
            $table->date('date_from')->default('9999-12-31')->index('dateFrom');
            $table->date('date_to')->default('9999-12-31');
            $table->tinyInteger('close_for')->default(0);
            $table->string('created_by', 50)->default('None');
            $table->integer('user_id')->default(0);
            $table->tinyInteger('active')->default(1);
            $table->timestamp('allotment_timestamp')->useCurrent();
            $table->timestamp('last_updated')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('room_allotment');
    }
}
