<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOlTariffAgencyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ol_tariff_agency', function (Blueprint $table) {
            $table->bigInteger('tariff_agency_id')->default(0);
            $table->bigInteger('tariff_id')->default(0);
            $table->bigInteger('agency_id')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ol_tariff_agency');
    }
}
