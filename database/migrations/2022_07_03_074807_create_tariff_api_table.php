<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTariffApiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tariff_api', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->bigInteger('tariff_id', true);
            $table->tinyInteger('tariff_type_id')->default(0)->index('tariff_type_id');
            $table->string('tariff_type', 100)->nullable()->default('');
            $table->tinyInteger('tariff_category_id')->default(8)->index('tariffCategoryID');
            $table->string('tariff_category', 100)->default('Rack');
            $table->tinyInteger('tariff_occupancy_id')->default(0);
            $table->string('tariff_occupancy', 100)->default('')->index('tariffOccupancy');
            $table->tinyInteger('meal_plan_id')->default(0)->index('mealPlanID');
            $table->string('meal_plan', 100)->default('');
            $table->smallInteger('room_id')->default(0)->index('room_id');
            $table->tinyInteger('currency_id')->default(0);
            $table->string('currency', 5)->default('');
            $table->decimal('adult')->default(0);
            $table->decimal('child')->default(0);
            $table->decimal('teen')->default(0);
            $table->decimal('adult_sharing')->default(0);
            $table->decimal('child_sharing')->default(0);
            $table->decimal('teen_sharing')->default(0);
            $table->decimal('adult_meal_supplement')->default(0);
            $table->decimal('child_meal_supplement')->default(0);
            $table->decimal('teen_meal_supplement')->default(0);
            $table->string('baby_cot_payable', 20)->default('');
            $table->decimal('baby_cot')->default(0);
            $table->tinyInteger('tariff_for')->default(0)->index('tariffFor');
            $table->date('valid_from')->default('9999-12-31');
            $table->date('valid_to')->default('9999-12-31');

            $table->index(['room_id'], 'roomID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tariff_api');
    }
}
