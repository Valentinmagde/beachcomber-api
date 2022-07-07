<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupQuoteReservationDiscountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_quote_reservation_discount', function (Blueprint $table) {
            $table->double('group_reservation_discount_id');
            $table->double('group_reservation_id')->nullable()->default(0);
            $table->text('discount_description')->nullable();
            $table->decimal('discount_amount', 10, 0)->nullable()->default(0);
            $table->string('discount_approver')->nullable()->default('None');
            $table->text('discount_type')->nullable();
            $table->tinyInteger('discount_type_id')->nullable()->default(0);
            $table->tinyInteger('is_non_refundable')->nullable()->default(0);
            $table->tinyInteger('active')->nullable()->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('group_quote_reservation_discount');
    }
}
