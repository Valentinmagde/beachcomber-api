<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmenityDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amenity_description', function (Blueprint $table) {
            $table->integer('amenity_desc_id', true);
            $table->integer('amenity_id')->default(0)->index('amenityID');
            $table->smallInteger('language_id')->default(0)->index('languageID');
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
        Schema::dropIfExists('amenity_description');
    }
}
