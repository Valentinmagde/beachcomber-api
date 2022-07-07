<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTermDescriptionOldTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('term_description_old', function (Blueprint $table) {
            $table->integer('term_desc_id', true);
            $table->integer('term_id')->default(0)->index('term_id');
            $table->smallInteger('language_id')->default(1)->index('language_id');
            $table->text('description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('term_description_old');
    }
}
