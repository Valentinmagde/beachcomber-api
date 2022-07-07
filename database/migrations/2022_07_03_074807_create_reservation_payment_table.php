<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationPaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_payment', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('reservation_id');
            $table->unsignedInteger('payment_mode_id');
            $table->string('payment_mode');
            $table->date('payment_date')->index('paymentDateIDX');
            $table->float('deposit_amount', 10, 0)->default(0);
            $table->float('deposit_received', 10, 0)->default(0);
            $table->tinyInteger('is_full_payment')->default(0);
            $table->tinyInteger('is_full_payment_at_hotel')->default(0);
            $table->integer('user_id');
            $table->string('user_name')->nullable();
            $table->timestamp('reservation_payment_timestamp')->useCurrentOnUpdate()->useCurrent();
            $table->tinyInteger('active')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservation_payment');
    }
}
