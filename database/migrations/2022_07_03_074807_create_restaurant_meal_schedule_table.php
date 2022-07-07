<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantMealScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurant_meal_schedule', function (Blueprint $table) {
            $table->integer('restaurant_meal_schedule_id', true);
            $table->integer('restaurant_meal_type_id');
            $table->integer('formula_id');
            $table->integer('restaurant_reservation_type_id')->nullable()->default(3);
            $table->integer('restaurant_id');
            $table->integer('restaurant_dress_type_id');
            $table->time('start_time');
            $table->time('end_time');
            $table->tinyInteger('meal_schedule_active')->nullable()->default(1);

            $table->index(['restaurant_meal_schedule_id', 'restaurant_meal_type_id', 'restaurant_reservation_type_id', 'restaurant_id', 'restaurant_dress_type_id'], 'Restaurant_Meal_Schedule_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurant_meal_schedule');
    }
}
