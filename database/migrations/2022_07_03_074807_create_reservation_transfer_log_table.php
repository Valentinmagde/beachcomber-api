<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationTransferLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_transfer_log', function (Blueprint $table) {
            $table->bigInteger('transaction_id', true);
            $table->bigInteger('reservation_id');
            $table->bigInteger('dossier_id');
            $table->string('status', 64);
            $table->text('data_packet')->nullable();
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
        Schema::dropIfExists('reservation_transfer_log');
    }
}
