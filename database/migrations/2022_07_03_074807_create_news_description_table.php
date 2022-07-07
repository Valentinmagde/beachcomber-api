<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_description', function (Blueprint $table) {
            $table->integer('news_desc_id', true);
            $table->integer('news_id')->default(0);
            $table->integer('language_id')->default(0)->index('language_id');
            $table->text('title');
            $table->text('description');
            $table->text('short_description');
            $table->string('link_text', 200)->default('');
            $table->string('news_link', 250)->default('');
            $table->date('valid_from')->default('9999-12-31');
            $table->date('valid_to')->default('9999-12-31');

            $table->index(['news_id', 'language_id'], 'news_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news_description');
    }
}
