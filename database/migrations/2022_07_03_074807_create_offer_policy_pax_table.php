<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfferPolicyPaxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offer_policy_pax', function (Blueprint $table) {
            $table->integer('offer_pax_policy_id', true);
            $table->integer('offer_id')->default(0)->index('offerID');
            $table->string('pax_condition_type')->default('None')->comment('0-All 1-Specific');
            $table->smallInteger('adult_pax')->default(0)->comment('acting as max adult pax');
            $table->smallInteger('min_adult_pax')->nullable()->default(0);
            $table->smallInteger('child_pax')->default(0)->comment('acting as max child pax');
            $table->smallInteger('min_child_pax')->nullable()->default(0);
            $table->smallInteger('teen_pax')->default(0)->comment('acting as max teen pax');
            $table->smallInteger('min_teen_pax')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offer_policy_pax');
    }
}
