<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelPackageAgencyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_package_agency', function (Blueprint $table) {
            $table->bigInteger('hotel_package_agency_id', true);
            $table->integer('hotel_package_id')->nullable()->default(0);
            $table->integer('agency_id')->nullable()->default(0);
            $table->date('applicable_from')->nullable();
            $table->date('applicable_to')->default('9999-12-31');
            $table->boolean('is_extended')->unsigned()->default(false);
            $table->unsignedTinyInteger('tariff_period_id')->default(0);
            $table->date('active_from')->nullable();
            $table->date('active_to')->default('9999-12-31');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotel_package_agency');
    }
}
