<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelAgencyRatePolicyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_agency_rate_policy', function (Blueprint $table) {
            $table->bigInteger('hotel_agency_rate_policy_id', true);
            $table->bigInteger('agency_rate_policy_id')->nullable()->default(0);
            $table->integer('hotel_id')->nullable()->default(0);
            $table->tinyInteger('active')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotel_agency_rate_policy');
    }
}
