<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRmOfferPeriodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rm_offer_period', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('offer_id');
            $table->date('date_from');
            $table->date('date_to');
            $table->string('note');
            $table->integer('note_id')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rm_offer_period');
    }
}
