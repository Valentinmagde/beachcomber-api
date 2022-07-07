<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationQuoteMailLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_quote_mail_log', function (Blueprint $table) {
            $table->integer('reservation_quote_mail_id')->primary();
            $table->integer('reservation_quote_id');
            $table->string('agent_username', 256);
            $table->string('recipient_email', 256);
            $table->string('subject', 256)->nullable();
            $table->string('attach_file_path', 256)->nullable();
            $table->dateTime('process_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservation_quote_mail_log');
    }
}
