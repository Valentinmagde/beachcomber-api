<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRmOfferCatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rm_offer_cat', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name');
            $table->integer('active')->default(1)->index('active_3');

            $table->index(['active'], 'active');
            $table->index(['active'], 'active_2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rm_offer_cat');
    }
}
