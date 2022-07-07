<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationPaymentErrorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_payment_error', function (Blueprint $table) {
            $table->bigInteger('reservation_payment_id', true);
            $table->bigInteger('reservation_id')->default(0);
            $table->text('payment_error_message')->nullable();
            $table->string('payment_error_code')->nullable();
            $table->timestamp('transaction_timestamp')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservation_payment_error');
    }
}
