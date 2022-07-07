<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationDiscountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_discount', function (Blueprint $table) {
            $table->bigInteger('reservation_discount_id', true);
            $table->bigInteger('reservation_id')->default(0)->index('oceandba_reservationid_20180403');
            $table->text('discount_description');
            $table->text('discount_reason');
            $table->decimal('discount_amount')->default(0);
            $table->string('discount_approver')->default('None');
            $table->text('discount_type');
            $table->tinyInteger('discount_type_id')->default(0);
            $table->tinyInteger('is_non_refundable')->default(0);
            $table->tinyInteger('active')->default(1);
            $table->unsignedTinyInteger('user_id')->default(0);
            $table->string('user_name')->default('Auto');
            $table->timestamp('reservation_discount_timestamp')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservation_discount');
    }
}
