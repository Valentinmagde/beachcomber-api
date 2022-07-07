<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfferTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offer', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('offer_id')->default(0);
            $table->smallInteger('offer_type_id')->default(0)->index('offerTypeID');
            $table->string('offer_type');
            $table->tinyInteger('client_type_id')->default(8)->index('clientTypeID');
            $table->string('client_type')->default('Rack');
            $table->integer('hotel_id')->default(0)->index('hotelID');
            $table->smallInteger('rebate_type_id')->default(0);
            $table->string('rebate_type', 25)->default('');
            $table->tinyInteger('currency_id')->default(0);
            $table->string('currency', 5)->default('');
            $table->decimal('rebate_value')->default(0);
            $table->decimal('child_rebate_value')->default(0);
            $table->decimal('teen_rebate_value')->default(0);
            $table->decimal('adult_sharing_rebate_value')->default(0);
            $table->decimal('child_sharing_rebate_value')->default(0);
            $table->decimal('teen_sharing_rebate_value')->default(0);
            $table->decimal('infant_sharing_rebate_value')->default(0);
            $table->decimal('adult')->default(0);
            $table->decimal('child')->default(0);
            $table->decimal('teen')->default(0);
            $table->tinyInteger('offer_for')->default(0)->index('offerFor');
            $table->tinyInteger('offer_specific_room')->default(0);
            $table->tinyInteger('offer_on_package')->default(1)->comment('0 - not applicable to package, 1-applicable to all packages, 2 - applicable to specific packages');
            $table->tinyInteger('offer_on_rate')->default(1);
            $table->boolean('offer_has_supplement')->default(false);
            $table->string('same_as_season_type', 100);
            $table->unsignedInteger('same_as_room_id');
            $table->unsignedTinyInteger('same_as_rate_type_id')->nullable()->default(0);
            $table->string('same_as_rate_type', 50)->nullable();
            $table->unsignedTinyInteger('allotment_from')->nullable()->default(0);
            $table->unsignedTinyInteger('allotment_to')->nullable()->default(0);
            $table->unsignedBigInteger('rm_offer_id')->default(0)->index('rmOfferIDX');
            $table->date('valid_from')->default('9999-12-31');
            $table->date('valid_to')->default('9999-12-31');
            $table->unsignedSmallInteger('tariff_period_id')->default(0);
            $table->date('applicable_from')->nullable();
            $table->date('applicable_to')->nullable();
            $table->date('active_from')->nullable();
            $table->date('active_to')->nullable()->default('9999-12-31');
            $table->boolean('is_extended')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offer');
    }
}
