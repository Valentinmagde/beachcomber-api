<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfferPolicyCalculationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offer_policy_calculation', function (Blueprint $table) {
            $table->integer('offer_calculation_policy_id', true);
            $table->integer('offer_id')->default(0);
            $table->string('offer_applicable_on')->default('None')->comment('Normal Rates, Packages, Supplements etc..');
            $table->smallInteger('offer_calculation_rank')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offer_policy_calculation');
    }
}
