<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelMarketCountryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_market_country', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('market_id')->nullable()->index('marketID');
            $table->integer('country_id')->nullable()->index('countryID');
            $table->date('valid_from')->default('2013-01-01');
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
        Schema::dropIfExists('hotel_market_country');
    }
}
