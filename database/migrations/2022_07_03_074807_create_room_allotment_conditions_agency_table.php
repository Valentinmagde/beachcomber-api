<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomAllotmentConditionsAgencyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_allotment_conditions_agency', function (Blueprint $table) {
            $table->bigInteger('id')->default(0);
            $table->bigInteger('allotment_id')->nullable()->default(0);
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
        Schema::dropIfExists('room_allotment_conditions_agency');
    }
}
