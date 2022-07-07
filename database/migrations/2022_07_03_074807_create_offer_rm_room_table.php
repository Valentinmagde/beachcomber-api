<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfferRmRoomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offer_rm_room', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('offer_id')->index('offerId');
            $table->integer('room_id')->index('room_id');
            $table->date('assigned_date');

            $table->index(['offer_id', 'room_id'], 'offerIDroomID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offer_rm_room');
    }
}
