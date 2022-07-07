<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTariffRmRateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tariff_rm_rate', function (Blueprint $table) {
            $table->integer('id', true)->index('id');
            $table->integer('rate_card_id')->index('rate_card_id');
            $table->integer('room_id');
            $table->integer('rate_type_id');
            $table->integer('pax_type_id');
            $table->integer('season_type_id');
            $table->integer('auto')->default(1);
            $table->float('value', 10, 0);
            $table->integer('shared_value');
            $table->integer('active')->default(1);

            $table->index(['id', 'rate_card_id', 'active'], 'id_2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tariff_rm_rate');
    }
}
