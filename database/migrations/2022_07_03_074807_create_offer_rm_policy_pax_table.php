<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfferRmPolicyPaxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offer_rm_policy_pax', function (Blueprint $table) {
            $table->integer('offer_pax_policy_id', true);
            $table->integer('offer_id')->default(0);
            $table->string('pax_condition_type')->default('None')->comment('0-All 1-Specific');
            $table->smallInteger('adult_pax')->default(0);
            $table->smallInteger('min_adult_pax')->default(0);
            $table->smallInteger('child_pax')->default(0);
            $table->smallInteger('min_child_pax')->default(0);
            $table->smallInteger('teen_pax')->default(0);
            $table->smallInteger('min_teen_pax')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offer_rm_policy_pax');
    }
}
