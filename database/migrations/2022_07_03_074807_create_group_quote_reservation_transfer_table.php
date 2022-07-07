<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupQuoteReservationTransferTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_quote_reservation_transfer', function (Blueprint $table) {
            $table->double('group_reservation_transfer_id');
            $table->double('group_reservation_id')->nullable();
            $table->tinyInteger('vehicle_type_id')->nullable();
            $table->string('arrival_flight', 765)->nullable();
            $table->string('departure_flight', 765)->nullable();
            $table->date('arrival_date')->nullable();
            $table->date('departure_date')->nullable();
            $table->string('transfer_from', 765)->nullable();
            $table->string('transfer_to', 765)->nullable();
            $table->tinyInteger('num_vehicle')->nullable();
            $table->double('transfer_tariff_id')->nullable();
            $table->double('transfer_rate_mode_id')->nullable();
            $table->decimal('adult_rate', 10, 0)->nullable();
            $table->decimal('child_rate', 10, 0)->nullable();
            $table->string('currency', 15)->nullable();
            $table->tinyInteger('currency_id')->nullable();
            $table->boolean('active')->nullable();
            $table->timestamp('group_reservation_transfer_timestamp')->useCurrentOnUpdate()->useCurrent();
            $table->tinyInteger('is_supplement')->nullable();
            $table->tinyInteger('num_supplements')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('group_quote_reservation_transfer');
    }
}
