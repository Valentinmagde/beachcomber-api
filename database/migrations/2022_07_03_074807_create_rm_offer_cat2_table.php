<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRmOfferCat2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rm_offer_cat2', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name', 60);
            $table->integer('active')->default(1)->index('active');

            $table->index(['id'], 'id_2');
            $table->index(['active'], 'active_2');
            $table->index(['id', 'active'], 'id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rm_offer_cat2');
    }
}
