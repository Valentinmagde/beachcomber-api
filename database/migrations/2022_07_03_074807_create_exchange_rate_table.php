<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExchangeRateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exchange_rate', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->integer('currency_id')->default(0);
            $table->string('currency', 5);
            $table->string('base_currency', 5)->nullable();
            $table->decimal('rate', 6);
            $table->date('valid_from')->default('2013-01-01');
            $table->date('valid_to')->default('9999-12-31');
            $table->integer('user_id')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exchange_rate');
    }
}
