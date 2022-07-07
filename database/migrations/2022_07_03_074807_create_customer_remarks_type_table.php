<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerRemarksTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_remarks_type', function (Blueprint $table) {
            $table->increments('customer_remarks_type_id');
            $table->string('customer_remarks_type')->nullable();
            $table->boolean('active')->unsigned()->default(true);
            $table->date('valid_from')->nullable()->default('2018-10-19');
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
        Schema::dropIfExists('customer_remarks_type');
    }
}
