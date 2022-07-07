<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTermCopyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('term_copy', function (Blueprint $table) {
            $table->integer('term_id', true);
            $table->integer('term_category_id')->default(0);
            $table->string('term_name')->nullable();
            $table->string('term_category')->nullable();
            $table->date('valid_from')->nullable()->default('9999-12-31');
            $table->date('valid_to')->nullable()->default('9999-12-31');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('term_copy');
    }
}
