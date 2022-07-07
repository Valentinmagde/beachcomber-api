<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerSubscriptionTypeDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_subscription_type_description', function (Blueprint $table) {
            $table->integer('subscription_type_desc_id', true);
            $table->text('subscription_type')->nullable();
            $table->tinyInteger('language_id')->nullable()->default(1);
            $table->integer('subscription_type_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_subscription_type_description');
    }
}
