<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTariffTypeDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tariff_type_description', function (Blueprint $table) {
            $table->smallInteger('tariff_type_desc_id', true);
            $table->smallInteger('tariff_type_id')->default(0)->index('tariffTypeID');
            $table->text('tariff_type_desc');
            $table->smallInteger('language_id')->default(0)->index('languageID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tariff_type_description');
    }
}
