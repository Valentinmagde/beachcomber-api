<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfferCombinableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offer_combinable', function (Blueprint $table) {
            $table->integer('offer_combinable_id', true)->unique('offer_combinable_id');
            $table->integer('offer_id')->default(0)->index('offer_id');
            $table->integer('offer_type_id')->default(0)->index('offer_type_id');

            $table->index(['offer_id', 'offer_type_id'], 'oceandba_key1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offer_combinable');
    }
}
