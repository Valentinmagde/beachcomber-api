<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelPackageSubtypeDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_package_subtype_description', function (Blueprint $table) {
            $table->integer('hotel_package_sub_desc_id', true);
            $table->integer('hotel_package_sub_id')->default(0);
            $table->smallInteger('language_id')->default(0);
            $table->text('included');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotel_package_subtype_description');
    }
}
