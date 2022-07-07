<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomAllotmentMarketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_allotment_market', function (Blueprint $table) {
            $table->bigInteger('id')->default(0);
            $table->integer('allotment_id')->nullable()->default(0)->index('allotmentID');
            $table->integer('market_id')->nullable()->default(0)->index('marketID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('room_allotment_market');
    }
}
