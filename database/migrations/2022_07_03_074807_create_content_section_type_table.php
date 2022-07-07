<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentSectionTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content_section_type', function (Blueprint $table) {
            $table->bigInteger('content_section_type_id', true);
            $table->string('content_section_type')->nullable();
            $table->date('valid_from')->nullable();
            $table->date('valid_to')->nullable()->default('9999-12-31');
            $table->tinyInteger('active')->nullable()->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('content_section_type');
    }
}
