<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelMealPlanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_meal_plan', function (Blueprint $table) {
            $table->integer('hotel_meal_plan_id', true);
            $table->integer('hotel_id')->nullable();
            $table->tinyInteger('meal_plan_id')->nullable();
            $table->boolean('is_default')->nullable();
            $table->date('valid_from')->default('2012-12-01');
            $table->date('valid_to')->default('9999-12-01');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotel_meal_plan');
    }
}
