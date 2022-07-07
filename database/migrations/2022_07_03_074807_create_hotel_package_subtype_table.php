<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelPackageSubtypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_package_subtype', function (Blueprint $table) {
            $table->integer('hotel_package_sub_id', true);
            $table->integer('hotel_package_id')->default(0);
            $table->integer('package_sub_type_id')->default(0);
            $table->decimal('adult', 10, 0)->default(0);
            $table->decimal('child', 10, 0)->default(0);
            $table->smallInteger('tariff_type_id')->default(0);
            $table->string('tariff_type', 25);
            $table->string('currency', 5);
            $table->date('valid_fom')->default('9999-12-31');
            $table->date('valid_to')->default('9999-12-31');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotel_package_subtype');
    }
}
