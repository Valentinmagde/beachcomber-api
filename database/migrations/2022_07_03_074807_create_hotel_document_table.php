<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelDocumentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_document', function (Blueprint $table) {
            $table->integer('hotel_document_id', true);
            $table->integer('document_id')->default(0);
            $table->integer('hotel_id')->default(0);
            $table->text('document_title')->nullable();
            $table->text('document_name')->nullable();
            $table->text('document_path')->nullable();
            $table->string('document_link');
            $table->string('target');
            $table->timestamp('uploaded_on')->useCurrent();
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
        Schema::dropIfExists('hotel_document');
    }
}
