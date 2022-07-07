<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOtaBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ota_booking', function (Blueprint $table) {
            $table->integer('id', true);
            $table->date('booking_date');
            $table->text('customer_name');
            $table->integer('hotel_id');
            $table->integer('room_id');
            $table->integer('number_of_rooms');
            $table->date('check_in_date');
            $table->date('check_out_date');
            $table->integer('offer_id');
            $table->integer('country_id');
            $table->integer('ota_source');
            $table->integer('room_nights');
            $table->float('daily_rate', 10, 0);
            $table->float('total_turnover', 10, 0);
            $table->float('ota_commission', 10, 0);
            $table->float('ota_net_turnover', 10, 0);
            $table->integer('meal_plan');
            $table->text('remarks');
            $table->boolean('status')->default(true);
            $table->timestamp('created')->useCurrent();
            $table->integer('created_by');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ota_booking');
    }
}
