<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerRemarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_remarks', function (Blueprint $table) {
            $table->bigIncrements('customer_remarks_id');
            $table->unsignedBigInteger('customer_id')->default(0);
            $table->unsignedInteger('customer_remarks_type_id')->default(0);
            $table->boolean('active')->unsigned()->default(true);
            $table->date('valid_from')->nullable()->default('9999-12-31');
            $table->date('valid_to')->nullable()->default('9999-12-31');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_remarks');
    }
}
