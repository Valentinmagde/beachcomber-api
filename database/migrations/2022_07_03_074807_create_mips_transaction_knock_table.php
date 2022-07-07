<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMipsTransactionKnockTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mips_transaction_knock', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('reservation_id');
            $table->string('currency', 3)->nullable();
            $table->float('amount', 10, 0)->nullable();
            $table->text('outlet')->nullable();
            $table->text('packet')->nullable();
            $table->timestamp('created')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mips_transaction_knock');
    }
}
