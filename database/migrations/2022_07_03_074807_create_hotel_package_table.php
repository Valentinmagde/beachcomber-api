<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelPackageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_package', function (Blueprint $table) {
            $table->integer('hotel_package_id', true);
            $table->integer('package_id')->default(0)->index('package_id');
            $table->integer('hotel_id')->default(0)->index('hotel_id');
            $table->string('client_type')->default('Rack');
            $table->smallInteger('client_type_id')->default(8)->index('clientTypeID');
            $table->smallInteger('no_pax')->default(0);
            $table->decimal('adult')->default(0);
            $table->decimal('child')->default(0);
            $table->decimal('teen')->default(0);
            $table->decimal('adult_sharing')->default(0);
            $table->decimal('child_sharing')->default(0);
            $table->decimal('teen_sharing')->default(0);
            $table->decimal('adult_cost')->default(0);
            $table->decimal('child_cost')->default(0);
            $table->decimal('teen_cost')->default(0);
            $table->decimal('adult_sharing_cost')->default(0);
            $table->decimal('child_sharing_cost')->default(0);
            $table->decimal('teen_sharing_cost')->default(0);
            $table->string('currency', 5)->default('MUR');
            $table->tinyInteger('package_for')->default(0)->index('packageFor')->comment('0-all,1-agency,2-country,3-market');
            $table->tinyInteger('package_specific_room')->default(0)->index('specificRoom');
            $table->tinyInteger('has_pre_requisite')->default(0);
            $table->integer('pre_requisite_id')->default(0)->comment('package_id required');
            $table->string('tariff_type', 15);
            $table->smallInteger('tariff_type_id')->default(0);
            $table->boolean('has_supplement')->default(false)->comment('1-yes,0-no');
            $table->unsignedBigInteger('rm_meal_rate_id')->default(0);
            $table->string('hms_code')->default('NA');
            $table->date('validity_from')->default('9999-12-31');
            $table->date('validity_to')->default('9999-12-31');
            $table->date('valid_from')->nullable()->default('9999-12-31');
            $table->date('valid_to')->nullable()->default('9999-12-31');
            $table->unsignedTinyInteger('tariff_period_id')->default(0);
            $table->date('applicable_from')->nullable();
            $table->date('applicable_to')->nullable();
            $table->date('active_from')->nullable();
            $table->date('active_to')->nullable();
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
        Schema::dropIfExists('hotel_package');
    }
}
