<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_customer', function (Blueprint $table) {
            $table->bigInteger('reservation_customer_id', true);
            $table->bigInteger('customer_id')->default(0)->index('customer_id');
            $table->bigInteger('reservation_id')->default(0)->index('reservation_id');
            $table->bigInteger('customer_company_id')->default(0);
            $table->tinyInteger('is_main_contact')->default(0)->index('is_main_contact');
            $table->boolean('active')->default(true);
            $table->unsignedTinyInteger('user_id')->default(0);
            $table->string('user_name')->default('Auto');
            $table->date('valid_from')->default('9999-12-31')->index('valid_from');
            $table->date('valid_to')->default('9999-12-31')->index('valid_to');
            $table->timestamp('created_on')->useCurrent();
            $table->integer('is_authenticated')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservation_customer');
    }
}
