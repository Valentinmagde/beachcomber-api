<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpaDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spa_description', function (Blueprint $table) {
            $table->integer('spa_desc_id', true);
            $table->integer('spa_id')->default(0)->index('spa_id');
            $table->smallInteger('language_id')->default(0)->index('language_id');
            $table->text('short_description');
            $table->text('description');
            $table->text('information');
            $table->text('facilities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spa_description');
    }
}
