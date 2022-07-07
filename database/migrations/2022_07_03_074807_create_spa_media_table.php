<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpaMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spa_media', function (Blueprint $table) {
            $table->bigInteger('spa_image_id', true);
            $table->integer('spa_id')->default(0);
            $table->string('spa_media_name')->default('');
            $table->string('spa_media_title')->default('');
            $table->string('spa_media_path')->default('');
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
        Schema::dropIfExists('spa_media');
    }
}
