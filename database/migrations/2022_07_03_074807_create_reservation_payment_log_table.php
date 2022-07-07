<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationPaymentLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_payment_log', function (Blueprint $table) {
            $table->integer('payment_log_id', true);
            $table->timestamp('log_date')->nullable()->useCurrent();
            $table->integer('reservation_id')->nullable();
            $table->integer('payment_type')->nullable();
            $table->tinyInteger('is_client_mail')->nullable()->default(0);
            $table->tinyInteger('is_payment')->nullable();
            $table->text('is_payment_description')->nullable();
            $table->text('status_description')->nullable();
            $table->text('payment_type_description')->nullable();
            $table->text('response_log')->nullable();
            $table->tinyInteger('is_hotel_mail')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservation_payment_log');
    }
}
