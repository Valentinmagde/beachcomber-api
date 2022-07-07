<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerAccountDeleteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_account_delete', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('customer_login_id');
            $table->tinyInteger('reason_id')->default(5);
            $table->text('data');
            $table->timestamp('created')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_account_delete');
    }
}
