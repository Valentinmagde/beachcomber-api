<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomAllotmentValidityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_allotment_validity', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('allotment_id')->default(0)->index('allotmentID');
            $table->date('date_from')->default('9999-12-31');
            $table->date('date_to')->default('9999-12-31');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('room_allotment_validity');
    }
}
