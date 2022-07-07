<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoucherRestrictionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voucher_restriction', function (Blueprint $table) {
            $table->bigIncrements('ID')->unique('ID');
            $table->integer('Voucher_Type_ID')->nullable();
            $table->integer('Restriction_Type_ID');
            $table->integer('value');
            $table->string('value_type', 64);
            $table->timestamp('created')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('voucher_restriction');
    }
}
