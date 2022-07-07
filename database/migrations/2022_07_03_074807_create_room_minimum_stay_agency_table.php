<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomMinimumStayAgencyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_minimum_stay_agency', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('room_minimum_stay_id')->nullable()->default(0);
            $table->integer('agency_id')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('room_minimum_stay_agency');
    }
}
