<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuoteEmailStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quote_email_status', function (Blueprint $table) {
            $table->bigInteger('quote_email_status_id', true);
            $table->bigInteger('quote_history_id')->default(0);
            $table->string('email_status');
            $table->tinyInteger('email_status_code')->default(0);
            $table->integer('sending_country')->default(0);
            $table->integer('recipient_country')->nullable()->default(0);
            $table->integer('reading_country')->default(0);
            $table->timestamp('status_timestamp')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quote_email_status');
    }
}
