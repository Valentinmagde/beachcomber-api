<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantMenuDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurant_menu_description', function (Blueprint $table) {
            $table->integer('restaurant_menu_desc_id', true);
            $table->integer('restaurant_menu_id')->nullable()->default(0)->index('restaurant_menu_id');
            $table->smallInteger('language_id')->nullable()->default(0)->index('language_id');
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
        Schema::dropIfExists('restaurant_menu_description');
    }
}
