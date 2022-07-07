<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomAllotmentConditionsMarketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_allotment_conditions_market', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('allotment_id')->nullable()->default(0)->index('allotment_id');
            $table->integer('market_id')->nullable()->default(0)->index('market_id');
            $table->bigInteger('active')->nullable()->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('room_allotment_conditions_market');
    }
}
