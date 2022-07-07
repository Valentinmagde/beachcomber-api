<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRmRateCardMarketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rm_rate_card_market', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('rate_card_id')->index('rate_card_id');
            $table->integer('market_id');
            $table->date('assigned_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rm_rate_card_market');
    }
}
