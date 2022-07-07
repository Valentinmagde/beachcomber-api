<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantMealDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurant_meal_description', function (Blueprint $table) {
            $table->integer('restaurant_meal_desc_id', true);
            $table->integer('restaurant_meal_type_id');
            $table->integer('language_id');
            $table->string('description', 50);
            $table->tinyInteger('meal_desc_active')->nullable()->default(1);

            $table->index(['restaurant_meal_type_id', 'language_id'], 'Restaurant_Meal_Description_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurant_meal_description');
    }
}
