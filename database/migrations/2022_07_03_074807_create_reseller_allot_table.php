<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResellerAllotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reseller_allot', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('year_id');
            $table->integer('reseller_id');
            $table->integer('site_id');
            $table->integer('market_id');
            $table->integer('room_id');
            $table->integer('prime_num');
            $table->integer('offprime_num');
            $table->integer('active')->default(1);

            $table->index(['year_id', 'reseller_id', 'active'], 'default');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reseller_allot');
    }
}
