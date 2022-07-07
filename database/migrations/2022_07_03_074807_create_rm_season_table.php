<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRmSeasonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rm_season', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('market_id')->nullable();
            $table->integer('hotel_id')->nullable();
            $table->integer('year_id');
            $table->string('label', 45)->default('');
            $table->integer('active')->default(1);

            $table->index(['year_id', 'active'], 'year_id');
            $table->index(['id', 'year_id', 'active'], 'id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rm_season');
    }
}
