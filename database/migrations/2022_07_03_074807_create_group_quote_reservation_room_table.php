<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupQuoteReservationRoomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_quote_reservation_room', function (Blueprint $table) {
            $table->integer('quote_reservation_room_id', true);
            $table->integer('quote_id');
            $table->integer('tariff_id');
            $table->integer('room_id');
            $table->date('date_from');
            $table->date('date_to');
            $table->smallInteger('units')->nullable()->default(1);
            $table->smallInteger('occupancy');
            $table->decimal('gross_total');
            $table->decimal('discount');
            $table->string('disc_type', 10);
            $table->decimal('net_total');
            $table->tinyInteger('active')->nullable()->default(1);
            $table->date('created');
            $table->integer('created_by');
            $table->date('updated')->nullable();
            $table->integer('updated_by')->nullable();
            $table->integer('hotel_id');
            $table->integer('adult');
            $table->integer('children')->nullable();
            $table->boolean('adult_sharing')->default(false);

            $table->index(['quote_reservation_room_id', 'tariff_id', 'room_id', 'date_from', 'date_to', 'active'], 'Quote_Room_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('group_quote_reservation_room');
    }
}
