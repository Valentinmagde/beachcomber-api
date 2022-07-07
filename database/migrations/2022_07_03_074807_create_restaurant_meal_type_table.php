<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantMealTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurant_meal_type', function (Blueprint $table) {
            $table->integer('restaurant_meal_type_id', true);
            $table->string('meal_type', 50);
            $table->enum('restaurant_type', ['Restaurant', 'Bar'])->nullable()->default('Restaurant');
            $table->tinyInteger('meal_type_active')->nullable()->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurant_meal_type');
    }
}
