<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfferCountryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offer_country', function (Blueprint $table) {
            $table->bigInteger('offer_country_id', true);
            $table->bigInteger('offer_id')->default(0)->index('offerID');
            $table->integer('country_id')->default(0)->index('countryID');
            $table->unsignedSmallInteger('tariff_period_id')->default(0);
            $table->date('applicable_from')->nullable();
            $table->date('applicable_to')->nullable();
            $table->date('active_from')->nullable();
            $table->date('active_to')->nullable();
            $table->boolean('is_extended')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offer_country');
    }
}
