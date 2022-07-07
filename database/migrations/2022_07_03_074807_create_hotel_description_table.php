<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_description', function (Blueprint $table) {
            $table->bigInteger('hotel_desc_id', true);
            $table->integer('hotel_id')->default(0)->index('hotelID');
            $table->integer('section_id')->default(0)->index('section_id');
            $table->string('description_name', 50)->default('');
            $table->text('short_description');
            $table->text('description');
            $table->smallInteger('language_id')->default(0)->index('language_id');
            $table->bigInteger('parent_id')->nullable();
            $table->date('valid_from')->default('9999-12-31');
            $table->date('valid_to')->default('9999-12-31');

            $table->index(['language_id', 'section_id'], 'oceandba_language_id_section_id_20190526');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotel_description');
    }
}
