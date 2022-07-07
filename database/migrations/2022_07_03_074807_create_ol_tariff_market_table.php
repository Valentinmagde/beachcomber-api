<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOlTariffMarketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ol_tariff_market', function (Blueprint $table) {
            $table->bigInteger('tariff_market_id', true);
            $table->bigInteger('tariff_id')->nullable()->default(0)->index('tariff_id');
            $table->integer('market_id')->nullable()->default(0)->index('marketID');

            $table->index(['market_id', 'tariff_id'], 'oceandba_api1');
            $table->index(['tariff_id', 'market_id'], 'oceandba_api2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ol_tariff_market');
    }
}
