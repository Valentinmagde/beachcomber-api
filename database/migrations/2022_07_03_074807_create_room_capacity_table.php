<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomCapacityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_capacity', function (Blueprint $table) {
            $table->integer('room_capacity_id', true);
            $table->integer('room_id')->default(0)->index('roomID');
            $table->smallInteger('adult')->default(0);
            $table->smallInteger('child')->default(0);
            $table->smallInteger('teen')->default(0);
            $table->smallInteger('infant')->default(0);
            $table->smallInteger('tariff_period_id')->default(7);
            $table->tinyInteger('active')->default(0);
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
        Schema::dropIfExists('room_capacity');
    }
}
