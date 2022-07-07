<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelMealPlanMarketDefaultTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_meal_plan_market_default', function (Blueprint $table) {
            $table->integer('hotel_meal_plan_id', true);
            $table->integer('hotel_id')->default(0)->index('hotel_id');
            $table->integer('hotel_market_id')->default(0);
            $table->integer('market_id')->default(0)->index('market_id');
            $table->tinyInteger('meal_plan_id')->default(1)->index('meal_plan_id');
            $table->tinyInteger('is_default')->default(1);
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
        Schema::dropIfExists('hotel_meal_plan_market_default');
    }
}
