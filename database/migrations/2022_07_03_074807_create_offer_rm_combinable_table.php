<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfferRmCombinableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offer_rm_combinable', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('offer_id');
            $table->integer('combinable_offer_id');

            $table->index(['offer_id', 'combinable_offer_id'], 'offer_id_combinable_offer_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offer_rm_combinable');
    }
}
