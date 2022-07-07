<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuoteSubjectTemplateDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quote_subject_template_description', function (Blueprint $table) {
            $table->bigInteger('quote_subject_template_desc_id', true);
            $table->integer('quote_subject_template_id')->default(0);
            $table->text('quote_subject_template_description');
            $table->integer('language_id')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quote_subject_template_description');
    }
}
