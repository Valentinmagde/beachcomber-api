<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupQuoteReservationOfferTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_quote_reservation_offer', function (Blueprint $table) {
            $table->double('group_reservation_offer_id');
            $table->double('group_reservation_id')->nullable();
            $table->double('offer_id')->nullable();
            $table->tinyInteger('active')->nullable();
            $table->timestamp('group_reservation_offer_timestamp')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('group_quote_reservation_offer');
    }
}
