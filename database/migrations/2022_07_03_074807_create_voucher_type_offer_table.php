<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoucherTypeOfferTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voucher_type_offer', function (Blueprint $table) {
            $table->bigIncrements('ID')->unique('ID');
            $table->integer('Voucher_Type_ID');
            $table->integer('Offer_Rebate_Type_ID');
            $table->integer('Discount_Type_ID');
            $table->float('rebate_value', 10, 0);
            $table->integer('Currency_ID');
            $table->dateTime('valid_from');
            $table->dateTime('valid_to');
            $table->timestamp('created')->useCurrent();
            $table->integer('costDiscount')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('voucher_type_offer');
    }
}
