<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTariffMarketApiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tariff_market_api', function (Blueprint $table) {
            $table->bigInteger('tariff_market_id', true);
            $table->bigInteger('tariff_id')->nullable()->default(0)->index('tariff_id');
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
        Schema::dropIfExists('tariff_market_api');
    }
}
