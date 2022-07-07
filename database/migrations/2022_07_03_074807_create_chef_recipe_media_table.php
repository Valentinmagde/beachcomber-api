<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChefRecipeMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chef_recipe_media', function (Blueprint $table) {
            $table->bigInteger('chef_recipe_image_id', true);
            $table->integer('chef_recipe_id')->default(0);
            $table->string('chef_recipe_media_name')->default('');
            $table->string('chef_recipe_media_title')->default('');
            $table->string('chef_recipe_media_path')->default('');
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
        Schema::dropIfExists('chef_recipe_media');
    }
}
