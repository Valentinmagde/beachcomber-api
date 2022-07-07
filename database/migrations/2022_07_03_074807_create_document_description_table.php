<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('document_description', function (Blueprint $table) {
            $table->integer('document_desc_id', true);
            $table->integer('document_id')->default(0);
            $table->smallInteger('language_id')->default(0);
            $table->text('short_desc');
            $table->date('date_uploaded')->default('9999-12-31');
            $table->string('uploaded_by', 50);
            $table->text('path');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('document_description');
    }
}
