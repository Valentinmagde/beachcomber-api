<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurrencyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('currency', function (Blueprint $table) {
            $table->tinyInteger('id_currency', true)->comment('auto increment field');
            $table->char('currency', 15)->default('')->comment('currency name');
            $table->string('currency_code', 3);
            $table->char('hms_code', 1)->default('');
            $table->tinyInteger('active')->default(1)->comment('1 for active, 0 for deleted');
            $table->char('country', 25)->default('');
            $table->boolean('has_exchange_rate')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('currency');
    }
}
