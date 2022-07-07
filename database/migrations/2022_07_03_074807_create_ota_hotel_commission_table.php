<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOtaHotelCommissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ota_hotel_commission', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('hotel_id');
            $table->integer('ota_id');
            $table->float('commission', 10, 0);
            $table->dateTime('valid_from')->default('0000-01-01 00:00:00');
            $table->dateTime('valid_to')->default('9999-12-31 23:59:59');
            $table->timestamp('created')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ota_hotel_commission');
    }
}
