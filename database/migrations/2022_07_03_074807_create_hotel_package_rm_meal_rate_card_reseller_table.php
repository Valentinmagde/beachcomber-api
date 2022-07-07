<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelPackageRmMealRateCardResellerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_package_rm_meal_rate_card_reseller', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('meal_id');
            $table->integer('reseller_id');
            $table->date('assigned_date');
            $table->date('applicable_from')->default('9999-12-31');
            $table->date('applicable_to')->default('9999-12-31');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotel_package_rm_meal_rate_card_reseller');
    }
}
