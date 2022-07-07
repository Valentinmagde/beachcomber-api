<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelPackageSupplementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_package_supplement', function (Blueprint $table) {
            $table->integer('hotel_package_supplement_id', true);
            $table->integer('hotel_package_id')->default(0);
            $table->integer('pax_no')->default(0);
            $table->decimal('tariff')->default(0);
            $table->smallInteger('tariff_type_id')->default(0);
            $table->text('tariff_type');
            $table->string('currency', 5);
            $table->date('valid_from')->default('9999-12-31');
            $table->date('valid_to')->default('9999-12-31');
            $table->integer('currency_id')->nullable()->default(0);
            $table->integer('ranking');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotel_package_supplement');
    }
}
