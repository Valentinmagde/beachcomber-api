<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSliderImageDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slider_image_description', function (Blueprint $table) {
            $table->integer('image_description_id', true);
            $table->integer('image_id');
            $table->integer('language_id');
            $table->text('alt');
            $table->text('caption');
            $table->mediumText('filename');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('slider_image_description');
    }
}
