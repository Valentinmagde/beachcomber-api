<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransferTariffAgencyOldTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfer_tariff_agency_old', function (Blueprint $table) {
            $table->bigInteger('tariff_agency_id', true);
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
        Schema::dropIfExists('transfer_tariff_agency_old');
    }
}
