<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelMarketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_market', function (Blueprint $table) {
            $table->bigInteger('hotel_market_id', true);
            $table->bigInteger('market_id')->nullable()->index('marketID');
            $table->string('market_name', 100)->nullable();
            $table->integer('hotel_id')->default(0)->index('hotelID');
            $table->bigInteger('asterix_hotel_id')->nullable();
            $table->unsignedTinyInteger('for_stats')->default(1);
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
        Schema::dropIfExists('hotel_market');
    }
}
