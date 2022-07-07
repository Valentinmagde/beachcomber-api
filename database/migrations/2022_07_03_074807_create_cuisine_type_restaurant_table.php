<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuisineTypeRestaurantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuisine_type_restaurant', function (Blueprint $table) {
            $table->integer('cuisine_type_restaurant_id', true);
            $table->integer('cuisine_type_id');
            $table->integer('restaurant_id');
            $table->tinyInteger('type_restaurant_active')->nullable()->default(1);

            $table->index(['cuisine_type_id', 'restaurant_id'], 'Cuisine_Type_Restaurant_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cuisine_type_restaurant');
    }
}
