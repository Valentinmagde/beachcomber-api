<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransferTariffModeDescriptionCopyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfer_tariff_mode_description_copy', function (Blueprint $table) {
            $table->integer('transfer_rate_mode_desc_id')->default(0);
            $table->integer('transfer_rate_mode_id')->default(0);
            $table->text('transfer_rate_mode_description');
            $table->tinyInteger('language_id')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transfer_tariff_mode_description_copy');
    }
}
