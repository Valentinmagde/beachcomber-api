<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChefDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chef_description', function (Blueprint $table) {
            $table->integer('chef_desc_id', true);
            $table->integer('chef_id')->default(0)->index('chef_id');
            $table->smallInteger('language_id')->default(0)->index('languageID');
            $table->text('description');
            $table->text('short_description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chef_description');
    }
}
