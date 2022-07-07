<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaqAnswerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faq_answer', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('answer_id');
            $table->bigInteger('question_id');
            $table->date('valid_from');
            $table->date('valid_to')->default('9999-12-31');
            $table->timestamp('created')->useCurrent();
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
        Schema::dropIfExists('faq_answer');
    }
}
