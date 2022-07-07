<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTariffRemarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tariff_remarks', function (Blueprint $table) {
            $table->bigInteger('tariff_remarks_id', true);
            $table->bigInteger('tariff_id')->default(0);
            $table->smallInteger('language_id')->nullable();
            $table->text('remarks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tariff_remarks');
    }
}
