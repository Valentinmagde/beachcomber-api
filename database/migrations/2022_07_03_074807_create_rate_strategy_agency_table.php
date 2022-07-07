<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRateStrategyAgencyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rate_strategy_agency', function (Blueprint $table) {
            $table->bigIncrements('agency_rate_strategy_id');
            $table->unsignedInteger('hotel_id')->nullable()->default(0);
            $table->unsignedBigInteger('agency_id')->nullable()->default(0);
            $table->unsignedTinyInteger('client_type_id')->default(1);
            $table->unsignedTinyInteger('rate_strategy_id')->nullable()->default(2)->comment('1-Family, 2-Child Supplement');
            $table->unsignedTinyInteger('tariff_period_id')->nullable()->default(9);
            $table->date('applicable_from')->nullable();
            $table->date('applicable_to')->nullable()->default('9999-12-31');
            $table->date('active_from')->nullable();
            $table->date('active_to')->nullable()->default('9999-12-31');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rate_strategy_agency');
    }
}
