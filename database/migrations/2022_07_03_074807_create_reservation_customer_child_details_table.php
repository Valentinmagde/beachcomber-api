<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationCustomerChildDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_customer_child_details', function (Blueprint $table) {
            $table->bigInteger('reservation_customer_child_details_id', true);
            $table->bigInteger('reservation_id')->default(0)->index('oceandba_reservation_id_20171017');
            $table->string('child_status')->default('NA');
            $table->tinyInteger('child_age')->default(0);
            $table->unsignedTinyInteger('active')->default(1);
            $table->unsignedTinyInteger('user_id')->default(0);
            $table->string('user_name')->default('Auto');
            $table->timestamp('reservation_customer_child_details_timestamp')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservation_customer_child_details');
    }
}
