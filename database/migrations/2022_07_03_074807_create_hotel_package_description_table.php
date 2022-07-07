<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelPackageDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_package_description', function (Blueprint $table) {
            $table->integer('hotel_package_description_id', true);
            $table->integer('language_id')->nullable()->index('language_id');
            $table->text('title')->nullable();
            $table->text('included')->nullable();
            $table->text('keypoint')->nullable();
            $table->integer('hotel_package_id')->nullable()->index('hotel_package_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotel_package_description');
    }
}
