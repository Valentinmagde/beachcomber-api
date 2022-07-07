<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChefRecipeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chef_recipe', function (Blueprint $table) {
            $table->integer('recipe_id', true);
            $table->integer('chef_id')->default(0);
            $table->integer('hotel_id');
            $table->integer('restaurant_id');
            $table->text('recipe_name');
            $table->text('recipe_img');
            $table->date('valid_from')->default('9999-12-31');
            $table->date('valid_to')->default('9999-12-31');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chef_recipe');
    }
}
