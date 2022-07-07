<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomCategoryDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_category_description', function (Blueprint $table) {
            $table->integer('room_category_desc_id', true);
            $table->smallInteger('room_category_id')->default(0)->index('roomCategoryID');
            $table->smallInteger('language_id')->default(0)->index('languageID');
            $table->text('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('room_category_description');
    }
}
