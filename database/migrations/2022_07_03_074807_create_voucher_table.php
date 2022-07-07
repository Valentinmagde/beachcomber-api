<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoucherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voucher', function (Blueprint $table) {
            $table->bigIncrements('ID')->unique('ID');
            $table->integer('Voucher_Type_ID');
            $table->string('code', 128)->unique('code');
            $table->boolean('used')->default(true);
            $table->timestamp('created')->useCurrent();
            $table->decimal('voucher_amount', 10)->default(0);
            $table->boolean('is_sold')->default(false);
            $table->boolean('is_allocated')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('voucher');
    }
}
