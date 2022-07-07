<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelTagDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_tag_description', function (Blueprint $table) {
            $table->integer('hotel_tag_desc_id', true);
            $table->integer('hotel_tag_id')->default(0)->index('hotel_tag_id');
            $table->smallInteger('language_id')->default(0)->index('language_id');
            $table->text('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotel_tag_description');
    }
}
