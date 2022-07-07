<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuoteExtraRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quote_extra_request', function (Blueprint $table) {
            $table->integer('quote_id');
            $table->integer('extra_id');
            $table->integer('extra_tariff_id');

            $table->primary(['quote_id', 'extra_id', 'extra_tariff_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quote_extra_request');
    }
}
