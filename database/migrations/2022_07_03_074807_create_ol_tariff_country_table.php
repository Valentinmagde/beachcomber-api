<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOlTariffCountryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ol_tariff_country', function (Blueprint $table) {
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
        Schema::dropIfExists('ol_tariff_country');
    }
}
