<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTariffOccupancyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tariff_occupancy', function (Blueprint $table) {
            $table->tinyInteger('tariff_occupancy_id', true);
            $table->string('tariff_occupancy', 20)->default('');
            $table->unsignedTinyInteger('rm_occupancy_id')->default(0)->comment('reference table rm_rate_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tariff_occupancy');
    }
}
