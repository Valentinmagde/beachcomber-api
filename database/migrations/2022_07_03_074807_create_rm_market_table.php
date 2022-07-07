<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRmMarketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rm_market', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('based_on_id')->default(0);
            $table->string('label', 45);
            $table->integer('year_id')->default(0);
            $table->integer('active')->nullable()->default(1)->index('active');

            $table->index(['year_id', 'active'], 'year_id');
            $table->index(['id'], 'id_2');
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
        Schema::dropIfExists('rm_market');
    }
}
