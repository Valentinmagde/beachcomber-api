<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_details', function (Blueprint $table) {
            $table->bigInteger('reservation_details_id', true);
            $table->bigInteger('reservation_id')->default(0)->index('reservation_id');
            $table->bigInteger('tariff_id')->default(0);
            $table->unsignedTinyInteger('meal_plan_id')->default(0);
            $table->unsignedTinyInteger('meal_plan')->default(0);
            $table->integer('room_id')->default(0)->index('room_id');
            $table->integer('upgraded_from_room_id')->default(0);
            $table->integer('room_num')->default(1);
            $table->date('check_in')->default('9999-12-31');
            $table->date('check_out')->default('9999-12-31');
            $table->integer('num_nights')->default(0);
            $table->integer('num_rooms')->default(0);
            $table->integer('adult')->default(0);
            $table->integer('child')->default(0);
            $table->integer('teen')->default(0);
            $table->integer('infant')->default(0);
            $table->integer('adult_sharing')->default(0);
            $table->integer('child_sharing')->default(0);
            $table->integer('teen_sharing')->default(0);
            $table->string('child_age')->default('');
            $table->string('infant_age')->default('');
            $table->tinyInteger('tariff_type_id')->default(0);
            $table->decimal('adult_rate', 10)->default(0);
            $table->decimal('adult_sharing_rate', 10)->default(0);
            $table->decimal('child_rate', 10)->default(0);
            $table->decimal('teen_rate', 10)->default(0);
            $table->decimal('discounted_adult_rate', 10)->default(0);
            $table->decimal('discounted_adult_sharing_rate', 10)->default(0);
            $table->decimal('discounted_child_rate', 10)->default(0);
            $table->decimal('discounted_teen_rate', 10)->default(0);
            $table->decimal('total', 10)->default(0);
            $table->decimal('discounted_total', 10)->default(0);
            $table->unsignedBigInteger('meal_package_id')->default(0)->comment('package category id');
            $table->unsignedBigInteger('hotel_package_id')->default(0)->comment('meal tariff id');
            $table->tinyInteger('currency_id')->default(0);
            $table->string('currency', 5)->default('na');
            $table->tinyInteger('rate_multiplier')->default(0)->comment('for TO+ 5, -5 etc..');
            $table->tinyInteger('client_type_id')->default(0);
            $table->string('client_type')->default('na');
            $table->string('client_type_code')->default('na');
            $table->string('arrival_flight')->default('na');
            $table->string('arrival_flight_time', 5)->default('');
            $table->string('departure_flight')->default('na');
            $table->string('departure_flight_time', 5)->default('');
            $table->string('client_name')->default('na');
            $table->tinyInteger('bed_type_id')->default(0);
            $table->string('bed_type')->default('na');
            $table->tinyInteger('resa_type_id')->default(0);
            $table->string('resa_type')->default('na');
            $table->tinyInteger('resa_status_id')->default(0);
            $table->string('resa_status')->default('na');
            $table->date('option_date')->default('9999-12-31');
            $table->unsignedInteger('allotment_id')->default(0);
            $table->string('allotment_code')->default('0');
            $table->integer('paid_by_id')->default(0);
            $table->string('paid_by')->default('0');
            $table->tinyInteger('room_sharing')->default(0);
            $table->string('requested_room_number')->default('0');
            $table->text('guest_remarks');
            $table->text('hotel_remarks');
            $table->string('pms_reservation_id')->default('na');
            $table->string('pms_transaction_status')->default('na');
            $table->string('rate_group', 25)->default('');
            $table->tinyInteger('is_custom_tariff')->default(0);
            $table->string('custom_tariff_reason')->default('na');
            $table->unsignedInteger('custom_tariff_approved_by_id')->default(0);
            $table->unsignedTinyInteger('user_id')->default(0);
            $table->string('user_name')->default('Auto');
            $table->boolean('active_in_pms')->default(true);
            $table->string('pms_status')->nullable()->default('Book');
            $table->string('hms_status')->nullable()->default('Book');
            $table->boolean('active')->default(true);
            $table->timestamp('reservation_details_timestamp')->useCurrent();

            $table->index(['room_id', 'reservation_id', 'active'], 'oceandba_api1_20171017');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservation_details');
    }
}
