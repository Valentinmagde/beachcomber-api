<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMealPlanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meal_plan', function (Blueprint $table) {
            $table->tinyInteger('meal_plan_id', true);
            $table->string('meal_plan_code', 5)->default('NA')->index('mealPplanCodeIDX');
            $table->integer('meal_package_id')->default(0);
            $table->tinyInteger('htng_code')->default(0);
            $table->tinyInteger('is_derived')->default(1);
            $table->tinyInteger('on_pms')->default(0);
            $table->date('valid_from')->default('9999-12-31');
            $table->date('valid_to')->nullable()->default('9999-12-31');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meal_plan');
    }
}
