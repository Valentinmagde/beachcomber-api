<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTariffCountryApiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tariff_country_api', function (Blueprint $table) {
            $table->bigInteger('tariff_country_id', true);
            $table->bigInteger('tariff_id')->default(0);
            $table->integer('country_id')->default(0)->index('countryID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tariff_country_api');
    }
}
