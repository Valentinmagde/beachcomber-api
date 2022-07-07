<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMealFormulaDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meal_formula_description', function (Blueprint $table) {
            $table->integer('formula_desc_id', true);
            $table->integer('formula_id');
            $table->integer('language_id');
            $table->string('description', 50);
            $table->tinyInteger('formula_desc_active')->nullable()->default(1);

            $table->index(['formula_id', 'language_id'], 'Meal_Formula_Description_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meal_formula_description');
    }
}
