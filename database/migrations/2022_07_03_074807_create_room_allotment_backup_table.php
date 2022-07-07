<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomAllotmentBackupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_allotment_backup', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->integer('hotel_id')->nullable();
            $table->integer('room_id')->nullable();
            $table->string('previous_action_type', 15)->nullable();
            $table->string('action_type', 15)->nullable();
            $table->date('date_from')->nullable();
            $table->date('date_to')->nullable();
            $table->tinyInteger('close_for')->nullable();
            $table->string('created_by', 150)->nullable();
            $table->integer('user_id')->nullable();
            $table->tinyInteger('active')->nullable();
            $table->timestamp('allotment_timestamp')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('room_allotment_backup');
    }
}
