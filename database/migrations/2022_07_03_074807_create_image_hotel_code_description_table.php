<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImageHotelCodeDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_hotel_code_description', function (Blueprint $table) {
            $table->bigInteger('image_hotel_code_desc_id', true);
            $table->integer('image_hotel_code_id')->default(0)->index('imageHotelCodeID');
            $table->string('image_code', 5)->default('')->index('imageCode');
            $table->text('description');
            $table->tinyInteger('language_id')->default(1)->index('languageID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('image_hotel_code_description');
    }
}
