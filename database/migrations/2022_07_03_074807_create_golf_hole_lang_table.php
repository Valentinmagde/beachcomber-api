<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGolfHoleLangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('golf_hole_lang', function (Blueprint $table) {
            $table->integer('Hole_Lang_Id', true)->index('Hole_Lang_Id');
            $table->integer('Language_Id')->default(0);
            $table->integer('Hole_Id')->default(0);
            $table->text('Descrition');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('golf_hole_lang');
    }
}
