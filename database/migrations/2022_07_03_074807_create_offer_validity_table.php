<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfferValidityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offer_validity', function (Blueprint $table) {
            $table->integer('offer_validity_id', true);
            $table->integer('offer_id')->default(0)->index('offerID');
            $table->date('offer_valid_from')->default('9999-12-31');
            $table->date('offer_valid_to')->default('9999-12-31');

            $table->index(['offer_id', 'offer_valid_from', 'offer_valid_to'], 'lookupIDX');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offer_validity');
    }
}
