<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoucherTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voucher_type', function (Blueprint $table) {
            $table->bigIncrements('ID');
            $table->boolean('status')->default(false);
            $table->string('prefix', 64);
            $table->date('valid_from');
            $table->date('valid_to');
            $table->timestamp('created')->useCurrent();

            $table->unique(['ID'], 'id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('voucher_type');
    }
}
