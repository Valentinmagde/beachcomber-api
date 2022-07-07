<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViewDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('view_description', function (Blueprint $table) {
            $table->integer('view_desc_id', true);
            $table->integer('view_id')->default(0)->index('room_view_id');
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
        Schema::dropIfExists('view_description');
    }
}
