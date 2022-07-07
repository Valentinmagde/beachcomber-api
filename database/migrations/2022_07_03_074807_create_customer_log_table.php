<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_log', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('change_alias');
            $table->unsignedInteger('user_id');
            $table->text('packet')->nullable();
            $table->timestamp('created')->useCurrent();
            $table->bigInteger('customer_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_log');
    }
}
