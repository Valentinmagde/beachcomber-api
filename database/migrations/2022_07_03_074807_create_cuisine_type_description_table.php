<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuisineTypeDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuisine_type_description', function (Blueprint $table) {
            $table->integer('cuisine_desc_id', true);
            $table->integer('cuisine_type_id');
            $table->string('description', 50);
            $table->integer('language_id');
            $table->tinyInteger('cuisine_desc_active')->nullable()->default(1);

            $table->index(['cuisine_type_id', 'language_id'], 'Cuisine_Type_Description_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cuisine_type_description');
    }
}
