<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('location_description', function (Blueprint $table) {
            $table->integer('location_desc_id', true);
            $table->integer('location_id')->default(0)->index('room_location_id');
            $table->integer('language_id')->default(0)->index('language_id');
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
        Schema::dropIfExists('location_description');
    }
}
