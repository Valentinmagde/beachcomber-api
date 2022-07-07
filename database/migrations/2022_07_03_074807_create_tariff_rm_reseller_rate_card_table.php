<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTariffRmResellerRateCardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tariff_rm_reseller_rate_card', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('reseller_id')->index('reseller_id');
            $table->integer('rate_card_id')->index('rate_card_id');
            $table->date('assigned_date');
            $table->date('applicable_date');
            $table->date('applicable_from')->nullable();
            $table->date('applicable_to')->nullable();
            $table->date('active_from')->nullable();
            $table->date('active_to')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tariff_rm_reseller_rate_card');
    }
}
