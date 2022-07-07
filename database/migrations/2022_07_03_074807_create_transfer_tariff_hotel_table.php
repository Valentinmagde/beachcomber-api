<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransferTariffHotelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfer_tariff_hotel', function (Blueprint $table) {
            $table->bigInteger('transfer_tariff_hotel_id', true);
            $table->bigInteger('transfer_tariff_id')->default(0);
            $table->integer('hotel_id')->default(0);
            $table->date('valid_from')->default('2012-12-31');
            $table->date('valid_to')->default('9999-12-31');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transfer_tariff_hotel');
    }
}
