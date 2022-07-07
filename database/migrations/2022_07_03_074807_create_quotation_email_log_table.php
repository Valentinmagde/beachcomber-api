<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotationEmailLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotation_email_log', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->text('message');
            $table->string('country')->default('na');
            $table->string('email')->default('na');
            $table->timestamp('stamp')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quotation_email_log');
    }
}
