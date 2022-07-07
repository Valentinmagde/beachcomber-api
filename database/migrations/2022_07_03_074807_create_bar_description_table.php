<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bar_description', function (Blueprint $table) {
            $table->integer('bar_desc_id', true);
            $table->integer('bar_id')->default(0)->index('barID');
            $table->smallInteger('language_id')->default(0)->index('languageID');
            $table->text('short_description');
            $table->text('opening_period');
            $table->text('closing_period');
            $table->text('long_description')->nullable();
            $table->text('practical_info')->nullable();
            $table->text('dress_code')->nullable();
            $table->date('valid_from')->default('2015-01-01');
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
        Schema::dropIfExists('bar_description');
    }
}
