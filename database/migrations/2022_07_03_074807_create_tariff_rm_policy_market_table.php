<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTariffRmPolicyMarketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tariff_rm_policy_market', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('policy_id')->index('policy_id');
            $table->unsignedInteger('market_id');
            $table->date('assigned_date');
            $table->date('valid_from')->nullable();
            $table->date('valid_to')->nullable();
            $table->unsignedTinyInteger('active')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tariff_rm_policy_market');
    }
}
