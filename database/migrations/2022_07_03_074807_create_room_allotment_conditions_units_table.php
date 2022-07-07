<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomAllotmentConditionsUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_allotment_conditions_units', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('id_condition')->nullable()->default(0)->index('conditionID');
            $table->bigInteger('id_room')->nullable()->default(0)->index('roomID');
            $table->tinyInteger('active')->nullable()->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('room_allotment_conditions_units');
    }
}
