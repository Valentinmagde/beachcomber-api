<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoucherReservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voucher_reservation', function (Blueprint $table) {
            $table->bigInteger('reservation_id', true);
            $table->bigInteger('voucher_id')->default(0);
            $table->string('voucher_code', 128);
            $table->integer('voucher_type_id')->default(0);
            $table->date('reservation_date')->default('9999-12-31');
            $table->string('client_type')->default('Public');
            $table->tinyInteger('client_type_id')->default(8);
            $table->integer('country_id')->default(0);
            $table->tinyInteger('language_id')->default(1);
            $table->tinyInteger('currency_id')->default(0);
            $table->string('currency', 5)->default('na');
            $table->string('payment_status', 50)->default('0');
            $table->integer('payment_status_id')->default(0);
            $table->string('payment_mode', 50)->default('na');
            $table->integer('payment_mode_id')->default(0);
            $table->date('payment_date')->default('9999-12-31');
            $table->timestamp('reservation_timestamp')->useCurrent();
            $table->integer('status_id')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('voucher_reservation');
    }
}
