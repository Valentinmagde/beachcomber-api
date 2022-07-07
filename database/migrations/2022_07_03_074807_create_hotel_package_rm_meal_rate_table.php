<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelPackageRmMealRateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_package_rm_meal_rate', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('meal_type_id');
            $table->integer('depend_on_meal_type_id')->default(0);
            $table->integer('inf_rate');
            $table->integer('child_rate');
            $table->integer('teen_rate');
            $table->integer('adult_rate');
            $table->integer('meal_rate_card_id');
            $table->string('name', 50);
            $table->date('from_date')->nullable();
            $table->date('to_date')->nullable();
            $table->integer('sort_order')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotel_package_rm_meal_rate');
    }
}
