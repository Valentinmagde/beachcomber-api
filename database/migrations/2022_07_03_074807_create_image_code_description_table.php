<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImageCodeDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_code_description', function (Blueprint $table) {
            $table->integer('image_code_desc_id', true);
            $table->integer('image_code_id')->default(0)->index('imageCodeID');
            $table->text('description');
            $table->tinyInteger('language_id')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('image_code_description');
    }
}
