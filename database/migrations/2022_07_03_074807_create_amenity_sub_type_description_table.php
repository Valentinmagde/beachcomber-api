<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmenitySubTypeDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amenity_sub_type_description', function (Blueprint $table) {
            $table->integer('amenity_sub_type_desc_id', true);
            $table->smallInteger('amenity_sub_type_id')->default(0);
            $table->smallInteger('language_id')->default(0);
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
        Schema::dropIfExists('amenity_sub_type_description');
    }
}
