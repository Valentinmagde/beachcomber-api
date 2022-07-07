<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTariffsCountryGroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms_tariffs_country_group', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->integer('id_r_tariff')->default(0)->index('id_r_tariff');
            $table->integer('id_group')->default(0)->index('id_country');
            $table->tinyInteger('active')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms_tariffs_country_group');
    }
}
