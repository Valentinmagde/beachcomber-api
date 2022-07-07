<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatetigerreservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ratetigerreservation', function (Blueprint $table) {
            $table->bigInteger('rt_reservation_id', true);
            $table->bigInteger('reservation_id');
            $table->bigInteger('unique_id');
            $table->bigInteger('hotel_reservation_id');
            $table->char('hotel_code', 40);
            $table->integer('hotel_id');
            $table->timestamp('createDateTime')->useCurrentOnUpdate()->useCurrent();
            $table->decimal('rtTotal', 10)->nullable();
            $table->decimal('rtTaxes', 10)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ratetigerreservation');
    }
}
