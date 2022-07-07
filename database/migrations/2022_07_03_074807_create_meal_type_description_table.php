<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMealTypeDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meal_type_description', function (Blueprint $table) {
            $table->integer('meal_type_description_id', true)->unique('meal_type_description_id');
            $table->integer('meal_type_id')->index('mealTypeID');
            $table->integer('Language_id')->index('languageID');
            $table->text('description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meal_type_description');
    }
}
