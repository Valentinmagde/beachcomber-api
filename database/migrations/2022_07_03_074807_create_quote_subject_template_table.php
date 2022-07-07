<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuoteSubjectTemplateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quote_subject_template', function (Blueprint $table) {
            $table->bigInteger('quote_subject_template_id', true);
            $table->integer('quote_message_template_id')->default(0)->comment('associated message template id i.e whether quote or proposal etc..');
            $table->string('quote_subject_type', 25)->default('Quotation');
            $table->tinyInteger('active')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quote_subject_template');
    }
}
