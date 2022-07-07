<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_description', function (Blueprint $table) {
            $table->integer('room_desc_id', true);
            $table->integer('room_id')->default(0)->index('room_id');
            $table->smallInteger('language_id')->default(0)->index('language_id');
            $table->text('name');
            $table->text('name_alias');
            $table->text('short_description');
            $table->text('description');
            $table->text('usp_description');
            $table->text('interleading_description');
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
        Schema::dropIfExists('room_description');
    }
}
