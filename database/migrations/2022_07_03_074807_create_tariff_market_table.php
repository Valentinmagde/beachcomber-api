<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTariffMarketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tariff_market', function (Blueprint $table) {
            $table->bigInteger('tariff_market_id', true);
            $table->bigInteger('tariff_id')->nullable()->default(0)->index('tariff_id');
            $table->integer('market_id')->nullable()->default(0)->index('marketID');
            $table->unsignedTinyInteger('tariff_period_id')->nullable();
            $table->date('applicable_from')->nullable();
            $table->date('applicable_to')->nullable();
            $table->date('active_from')->nullable();
            $table->date('active_to')->default('9999-12-31');
            $table->boolean('is_extended')->default(false);

            $table->index(['tariff_id', 'market_id'], 'oceandba_api2');
            $table->index(['market_id', 'tariff_id'], 'oceandba_api1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tariff_market');
    }
}
