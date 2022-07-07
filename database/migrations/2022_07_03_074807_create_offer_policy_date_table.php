<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfferPolicyDateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offer_policy_date', function (Blueprint $table) {
            $table->integer('offer_date_policy_id', true);
            $table->integer('offer_id')->nullable()->default(0)->index('offerID');
            $table->date('booking_date')->nullable()->comment('expected booking date');
            $table->tinyInteger('has_minimum_stay')->default(0);
            $table->tinyInteger('has_days_prior_arrival')->default(0);
            $table->tinyInteger('has_booking_date')->default(0);
            $table->tinyInteger('has_booking_range')->default(0);
            $table->tinyInteger('has_arrival_range')->default(0);
            $table->tinyInteger('has_departure_range')->default(0);
            $table->smallInteger('days_prior_arrival')->default(0);
            $table->smallInteger('days_prior_arrival_to')->default(0);
            $table->smallInteger('minimum_stay')->default(0);
            $table->date('booking_from')->nullable();
            $table->date('booking_to')->nullable();
            $table->date('arrival_from')->nullable();
            $table->date('arrival_to')->nullable();
            $table->date('departure_from')->default('9999-12-31');
            $table->date('departure_to')->default('9999-12-31');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offer_policy_date');
    }
}
