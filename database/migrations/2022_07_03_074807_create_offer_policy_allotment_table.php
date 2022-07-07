<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfferPolicyAllotmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offer_policy_allotment', function (Blueprint $table) {
            $table->integer('offer_allotment_policy_id', true);
            $table->integer('offer_id')->default(0);
            $table->integer('allotment_condition_type')->default(0)->comment('0 - all, 1- specific');
            $table->integer('allotment_from')->default(0);
            $table->integer('allotment_to')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offer_policy_allotment');
    }
}
