<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTariffImportBchRateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tariff_import_bch_rate', function (Blueprint $table) {
            $table->bigIncrements('rate_import_id');
            $table->unsignedBigInteger('rate_card_id')->default(0);
            $table->unsignedBigInteger('reseller_id')->default(0);
            $table->unsignedTinyInteger('client_type_id')->default(1);
            $table->string('info')->default('BCH');
            $table->date('valid_from')->default('2018-11-01');
            $table->date('valid_to')->default('2019-10-31');
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
        Schema::dropIfExists('tariff_import_bch_rate');
    }
}
