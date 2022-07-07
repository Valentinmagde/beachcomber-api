<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaqCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faq_category', function (Blueprint $table) {
            $table->bigInteger('category_id', true);
            $table->string('category_alias', 256);
            $table->date('valid_from')->nullable();
            $table->date('valid_to')->default('9999-12-31');
            $table->timestamp('created')->useCurrent();
            $table->integer('parent_id')->default(0);
            $table->integer('weight');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faq_category');
    }
}
