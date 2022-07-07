<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomAllotmentReservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_allotment_reservation', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('allotment_id')->index('allotment_id');
            $table->integer('reservation_id')->index('reservation_id');
            $table->date('day_date')->nullable();
            $table->boolean('active')->default(true);
            $table->timestamp('created')->useCurrentOnUpdate()->useCurrent();
            $table->text('note')->nullable();

            $table->index(['allotment_id', 'reservation_id', 'day_date'], 'allotment_reservation');
            $table->unique(['id'], 'id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('room_allotment_reservation');
    }
}
