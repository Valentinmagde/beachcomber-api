<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTariffAgencyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tariff_agency', function (Blueprint $table) {
            $table->bigIncrements('tariff_agency_id');
            $table->bigInteger('tariff_id')->default(0);
            $table->bigInteger('agency_id')->default(0);
            $table->unsignedTinyInteger('tariff_period_id')->nullable();
            $table->date('applicable_from')->nullable();
            $table->date('applicable_to')->nullable();
            $table->date('active_from')->nullable();
            $table->date('active_to')->default('9999-12-31');
            $table->boolean('is_extended')->default(false);

            $table->index(['tariff_id', 'agency_id'], 'tariff_agency_idx');
            $table->index(['agency_id', 'tariff_id'], 'tariff_agency_idx2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tariff_agency');
    }
}
