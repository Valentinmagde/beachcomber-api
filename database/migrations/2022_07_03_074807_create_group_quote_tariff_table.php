<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupQuoteTariffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_quote_tariff', function (Blueprint $table) {
            $table->double('id')->nullable();
            $table->double('tariff_id')->nullable();
            $table->tinyInteger('tariff_type_id')->nullable();
            $table->string('tariff_type', 300)->nullable();
            $table->tinyInteger('tariff_category_id')->nullable();
            $table->string('tariff_category', 300)->nullable();
            $table->tinyInteger('tariff_occupancy_id')->nullable();
            $table->string('tariff_occupancy', 300)->nullable();
            $table->tinyInteger('meal_plan_id')->nullable();
            $table->string('meal_plan', 300)->nullable();
            $table->integer('room_id')->nullable();
            $table->tinyInteger('currency_id')->nullable();
            $table->string('currency', 15)->nullable();
            $table->decimal('adult', 10, 0)->nullable();
            $table->decimal('child', 10, 0)->nullable();
            $table->decimal('teen', 10, 0)->nullable();
            $table->decimal('adult_sharing', 10, 0)->nullable();
            $table->decimal('child_sharing', 10, 0)->nullable();
            $table->decimal('teen_sharing', 10, 0)->nullable();
            $table->decimal('adult_meal_supplement', 10, 0)->nullable();
            $table->decimal('child_meal_supplement', 10, 0)->nullable();
            $table->decimal('teen_meal_supplement', 10, 0)->nullable();
            $table->string('baby_cot_payable', 60)->nullable();
            $table->decimal('baby_cot', 10, 0)->nullable();
            $table->tinyInteger('tariff_for')->nullable();
            $table->date('valid_from')->nullable();
            $table->date('valid_to')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('group_quote_tariff');
    }
}
