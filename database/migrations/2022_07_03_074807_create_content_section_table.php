<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentSectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content_section', function (Blueprint $table) {
            $table->integer('section_id', true);
            $table->integer('page_id')->default(0)->index('oceandba_page_id_20190731');
            $table->text('section_name')->nullable();
            $table->text('source')->nullable();
            $table->string('image_folder', 100)->default('');
            $table->tinyInteger('is_short')->default(0);
            $table->integer('value_id')->nullable()->default(0);
            $table->date('valid_from')->default('9999-12-31');
            $table->date('valid_to')->default('9999-12-31');
            $table->integer('content_associated_id')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('content_section');
    }
}
