<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupQuoteReservationAgencyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_quote_reservation_agency', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('quote_id');
            $table->integer('agency_id');
            $table->tinyInteger('active')->nullable()->default(1);
            $table->date('created');
            $table->integer('created_by');
            $table->date('updated')->nullable();
            $table->integer('updated_by')->nullable();

            $table->index(['quote_id', 'agency_id', 'active'], 'Quote_Reservation_Agency_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('group_quote_reservation_agency');
    }
}
