<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelDescriptionImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_description_image', function (Blueprint $table) {
            $table->integer('hotel_desc_image_id', true);
            $table->integer('hotel_desc_id')->default(0)->index('hotelDescID');
            $table->integer('section_id')->default(0);
            $table->integer('hotel_id')->default(0)->index('hotelID');
            $table->string('image_title')->default('');
            $table->string('image_name')->default('');
            $table->string('image_path')->default('');
            $table->date('valid_from')->default('9999-12-31');
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
        Schema::dropIfExists('hotel_description_image');
    }
}
