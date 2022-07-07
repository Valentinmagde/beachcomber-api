<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurant_description', function (Blueprint $table) {
            $table->integer('restaurant_desc_id', true);
            $table->integer('restaurant_id')->nullable()->default(0)->index('restaurant_id');
            $table->smallInteger('language_id')->nullable()->default(0)->index('language_id');
            $table->text('name')->nullable();
            $table->text('short_description')->nullable();
            $table->text('cuisine')->nullable();
            $table->time('breakfast_start')->nullable()->default('00:00:00');
            $table->time('breakfast_end')->nullable()->default('00:00:00');
            $table->time('lunch_start')->nullable()->default('00:00:00');
            $table->time('lunch_end')->nullable()->default('00:00:00');
            $table->time('dinner_start')->nullable()->default('00:00:00');
            $table->time('dinner_end')->nullable()->default('00:00:00');
            $table->text('location')->nullable();
            $table->text('attire')->nullable();
            $table->text('reservation')->nullable();
            $table->text('description')->nullable();
            $table->boolean('breakfast')->nullable();
            $table->boolean('lunch')->nullable();
            $table->boolean('dinner')->nullable();
            $table->text('breakfast_start_period')->nullable();
            $table->text('breakfast_end_period')->nullable();
            $table->text('lunch_start_period')->nullable();
            $table->text('lunch_end_period')->nullable();
            $table->text('dinner_start_period')->nullable();
            $table->text('dinner_end_period')->nullable();
            $table->boolean('bar')->nullable();
            $table->text('bar_start_period')->nullable();
            $table->text('bar_end_period')->nullable();
            $table->time('bar_start')->nullable()->default('00:00:00');
            $table->time('bar_end')->nullable()->default('00:00:00');
            $table->text('breakfast_meal_type')->nullable();
            $table->text('lunch_meal_type')->nullable();
            $table->text('dinner_meal_type')->nullable();
            $table->boolean('is_translated')->nullable()->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurant_description');
    }
}
