<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaqQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faq_question', function (Blueprint $table) {
            $table->bigInteger('question_id', true);
            $table->date('valid_from');
            $table->date('valid_to')->default('9999-12-31');
            $table->timestamp('created')->useCurrent();
            $table->boolean('featured')->default(false);
            $table->tinyInteger('weight')->nullable()->default(99);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faq_question');
    }
}
