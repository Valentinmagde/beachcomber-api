<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomAllotmentConditionsValidityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_allotment_conditions_validity', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('id_condition')->nullable()->default(0)->index('conditionID');
            $table->date('date_from')->nullable()->default('9999-12-31');
            $table->date('date_to')->nullable()->default('9999-12-31');
            $table->tinyInteger('active')->nullable()->default(1);
            $table->unsignedTinyInteger('no_rooms')->default(0);
            $table->unsignedTinyInteger('booked')->default(0);
            $table->tinyInteger('remaining')->nullable()->default(0);
            $table->string('note')->nullable();
            $table->date('return')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('room_allotment_conditions_validity');
    }
}
