<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelAmenityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_amenity', function (Blueprint $table) {
            $table->integer('hotel_amenity_id', true);
            $table->integer('hotel_id')->default(0);
            $table->integer('amenity_id')->default(0);
            $table->integer('amenity_sub_type_id')->default(0);
            $table->tinyInteger('is_featured')->default(0);
            $table->tinyInteger('rank')->default(0);
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
        Schema::dropIfExists('hotel_amenity');
    }
}
