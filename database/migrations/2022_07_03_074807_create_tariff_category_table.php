<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTariffCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tariff_category', function (Blueprint $table) {
            $table->tinyInteger('tariff_category_id', true);
            $table->string('tariff_category', 20)->default('');
            $table->string('tariff_category_code')->default('Pub');
            $table->string('tariff_hms_code')->default('');
            $table->string('tariff_category_alias', 50);
            $table->tinyInteger('tariff_category_rank')->default(0);
            $table->unsignedTinyInteger('rate_manager_id')->default(0)->index('rmIDIDX');
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
        Schema::dropIfExists('tariff_category');
    }
}
