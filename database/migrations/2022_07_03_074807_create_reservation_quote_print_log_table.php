<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationQuotePrintLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_quote_print_log', function (Blueprint $table) {
            $table->integer('reservation_quote_log_id', true);
            $table->integer('reservation_quote_id');
            $table->string('username', 256)->nullable();
            $table->dateTime('process_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservation_quote_print_log');
    }
}
