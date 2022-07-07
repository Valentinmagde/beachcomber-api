<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfferRmMarketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offer_rm_market', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('offer_id')->index('offer_id');
            $table->integer('market_id')->default(0);
            $table->date('assigned_date');
            $table->date('applicable_from')->default('9999-12-31');
            $table->date('applicable_to')->default('9999-12-31');

            $table->index(['offer_id', 'market_id'], 'offerIDmarketID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offer_rm_market');
    }
}
