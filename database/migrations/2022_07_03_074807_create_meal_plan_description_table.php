<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMealPlanDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meal_plan_description', function (Blueprint $table) {
            $table->smallInteger('meal_plan_desc_id', true);
            $table->tinyInteger('meal_plan_id')->default(0)->index('mealPlanID');
            $table->smallInteger('language_id')->default(0)->index('languageID');
            $table->text('name');
            $table->text('printed_name')->nullable()->comment('Use for ratesheet only');

            $table->index(['language_id', 'meal_plan_id'], 'oceandba_api1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meal_plan_description');
    }
}
