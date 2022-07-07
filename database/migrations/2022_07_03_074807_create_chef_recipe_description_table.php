<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChefRecipeDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chef_recipe_description', function (Blueprint $table) {
            $table->integer('recipe_desc_id', true);
            $table->integer('recipe_id')->default(0)->index('recipe_id');
            $table->smallInteger('language_id')->default(0)->index('language_id');
            $table->text('recipe_name');
            $table->text('ingredients');
            $table->text('preparation');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chef_recipe_description');
    }
}
