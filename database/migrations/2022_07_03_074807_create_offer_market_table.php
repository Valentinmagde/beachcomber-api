<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfferMarketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offer_market', function (Blueprint $table) {
            $table->bigInteger('offer_market_id', true);
            $table->bigInteger('offer_id')->nullable()->default(0)->index('offer_id');
            $table->integer('market_id')->nullable()->default(0)->index('market_id');
            $table->unsignedSmallInteger('tariff_period_id')->default(0);
            $table->date('applicable_from')->nullable();
            $table->date('applicable_to')->nullable();
            $table->date('active_from')->nullable();
            $table->date('active_to')->nullable()->default('9999-12-31')->index('activeTOIDX');
            $table->boolean('is_extended')->default(false);

            $table->index(['applicable_from', 'applicable_to'], 'applicableIDX');
            $table->index(['offer_id', 'market_id'], 'offer_market_idx');
            $table->index(['active_from', 'active_to'], 'activeIDX');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offer_market');
    }
}
