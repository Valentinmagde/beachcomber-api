<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChefMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chef_media', function (Blueprint $table) {
            $table->bigInteger('chef_image_id', true);
            $table->integer('chef_id')->default(0);
            $table->string('chef_media_name')->default('');
            $table->string('chef_media_title')->default('');
            $table->string('chef_media_path')->default('');
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
        Schema::dropIfExists('chef_media');
    }
}
