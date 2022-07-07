<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMipsTransactionLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mips_transaction_log', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('type', 32);
            $table->string('state', 32);
            $table->text('packet')->nullable();
            $table->timestamp('created')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mips_transaction_log');
    }
}
