<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupQuoteReservationCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_quote_reservation_customer', function (Blueprint $table) {
            $table->double('group_reservation_customer_id');
            $table->double('group_customer_id')->nullable()->default(0);
            $table->double('group_reservation_id')->nullable()->default(0);
            $table->tinyInteger('is_main_contact')->nullable()->default(0);
            $table->boolean('active')->nullable()->default(true);
            $table->date('valid_from')->nullable()->default('9999-12-31');
            $table->date('valid_to')->nullable()->default('9999-12-31');
            $table->timestamp('created_on')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('group_quote_reservation_customer');
    }
}
