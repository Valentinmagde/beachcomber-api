<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfferSupplementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offer_supplement', function (Blueprint $table) {
            $table->integer('offer_supplement_id', true);
            $table->integer('offer_id')->default(0)->index('oceandba_offer_id');
            $table->string('offer_supplement_name')->default('Halfboard');
            $table->string('offer_supplement_currency')->default('MUR');
            $table->integer('offer_supplement_tariff_type_id')->default(0);
            $table->string('offer_supplement_tariff_type')->default('None');
            $table->decimal('offer_supplement_adult', 10)->default(0);
            $table->decimal('offer_supplement_child', 10)->default(0);
            $table->decimal('offer_supplement_teen', 10)->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offer_supplement');
    }
}
