<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMealPlanDescriptionCopyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meal_plan_description_copy', function (Blueprint $table) {
            $table->smallInteger('meal_plan_desc_id')->default(0);
            $table->tinyInteger('meal_plan_id')->default(0);
            $table->smallInteger('language_id')->default(0);
            $table->text('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meal_plan_description_copy');
    }
}
