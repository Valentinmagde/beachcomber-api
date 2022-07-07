<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfferAgencyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offer_agency', function (Blueprint $table) {
            $table->bigInteger('offer_agency_id', true);
            $table->integer('offer_id')->nullable()->default(0);
            $table->integer('agency_id')->nullable()->default(0);
            $table->unsignedSmallInteger('tariff_period_id')->default(0);
            $table->date('applicable_from')->nullable();
            $table->date('applicable_to')->nullable();
            $table->date('active_from')->nullable();
            $table->date('active_to')->nullable()->default('9999-12-31');
            $table->boolean('is_extended')->default(false);

            $table->index(['offer_id', 'agency_id'], 'offer_agency_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offer_agency');
    }
}
