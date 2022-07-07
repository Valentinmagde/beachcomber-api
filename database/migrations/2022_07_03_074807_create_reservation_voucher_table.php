<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationVoucherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_voucher', function (Blueprint $table) {
            $table->bigIncrements('ID')->unique('ID');
            $table->integer('Reservation_ID');
            $table->integer('Voucher_ID');
            $table->integer('Reservation_Discount_ID');
            $table->unsignedInteger('Reservation_Payment_ID')->default(0);
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
        Schema::dropIfExists('reservation_voucher');
    }
}
