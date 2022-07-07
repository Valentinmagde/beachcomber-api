<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantDressDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurant_dress_description', function (Blueprint $table) {
            $table->integer('restaurant_dress_desc_id', true);
            $table->integer('restaurant_dress_type_id');
            $table->integer('language_id');
            $table->string('description', 50);
            $table->tinyInteger('dress_desc_active')->nullable()->default(1);

            $table->index(['restaurant_dress_type_id', 'language_id'], 'Restaurant_Dress_Description_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurant_dress_description');
    }
}
