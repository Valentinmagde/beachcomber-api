<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelPackageRmMealRateCardSiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_package_rm_meal_rate_card_site', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('meal_id')->index('meal_id');
            $table->integer('hotel_id');
            $table->date('assigned_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotel_package_rm_meal_rate_card_site');
    }
}
