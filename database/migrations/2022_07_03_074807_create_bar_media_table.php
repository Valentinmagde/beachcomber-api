<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bar_media', function (Blueprint $table) {
            $table->bigInteger('bar_image_id', true);
            $table->integer('bar_id')->default(0);
            $table->string('bar_media_name')->default('');
            $table->string('bar_media_title')->default('');
            $table->string('bar_media_path')->default('');
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
        Schema::dropIfExists('bar_media');
    }
}
