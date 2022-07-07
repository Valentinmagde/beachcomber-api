<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurant', function (Blueprint $table) {
            $table->integer('restaurant_id', true);
            $table->enum('restaurant_type', ['Restaurant', 'Bar'])->nullable()->default('Restaurant');
            $table->integer('hotel_id')->default(0);
            $table->integer('seat')->default(0);
            $table->date('valid_from')->default('9999-12-31');
            $table->date('valid_to')->default('9999-12-31');
            $table->text('restaurant_name');
            $table->text('restaurant_image')->nullable();
            $table->text('restaurant_menu')->nullable();
            $table->boolean('breakfast_start_period_id')->nullable();
            $table->boolean('breakfast_end_period_id')->nullable();
            $table->boolean('lunch_start_period_id')->nullable();
            $table->boolean('lunch_end_period_id')->nullable();
            $table->boolean('dinner_start_period_id')->nullable();
            $table->boolean('dinner_end_period_id')->nullable();
            $table->boolean('bar_start_period_id')->nullable();
            $table->boolean('bar_end_period_id')->nullable();
            $table->tinyInteger('restaurant_reservation_type')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurant');
    }
}
