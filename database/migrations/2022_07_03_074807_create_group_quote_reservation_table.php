<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupQuoteReservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_quote_reservation', function (Blueprint $table) {
            $table->double('group_reservation_id')->unique('group_reservation_id');
            $table->date('reservation_date')->nullable()->default('9999-12-31');
            $table->string('client_type', 765)->nullable()->default('Public');
            $table->tinyInteger('client_type_id')->nullable()->default(8);
            $table->tinyInteger('destination_id')->nullable()->default(0);
            $table->double('hotel_id')->nullable()->default(0);
            $table->date('check_in')->nullable()->default('9999-12-31');
            $table->date('check_out')->nullable()->default('9999-12-31');
            $table->tinyInteger('num_nights')->nullable()->default(0);
            $table->tinyInteger('num_rooms')->nullable()->default(0);
            $table->double('country_id')->nullable()->default(0);
            $table->double('agency_id')->nullable()->default(0);
            $table->tinyInteger('language_id')->nullable()->default(1);
            $table->date('arrival_date')->nullable()->default('9999-12-31');
            $table->date('departure_date')->nullable()->default('9999-12-31');
            $table->string('arrival_flight', 765)->nullable();
            $table->string('departure_flight', 765)->nullable()->default('na');
            $table->date('wedding_date')->nullable()->default('9999-12-31');
            $table->integer('adult')->nullable()->default(0);
            $table->integer('child')->nullable()->default(0);
            $table->integer('teen')->nullable()->default(0);
            $table->integer('infant')->nullable()->default(0);
            $table->binary('additional_request')->nullable();
            $table->tinyInteger('status_id')->nullable()->default(0);
            $table->string('status', 765)->nullable()->default('na');
            $table->tinyInteger('quote_status_id')->nullable()->default(0);
            $table->string('quote_status', 765)->nullable()->default('na');
            $table->tinyInteger('meal_plan_id')->nullable()->default(0);
            $table->string('meal_plan', 765)->nullable()->default('na');
            $table->string('package', 765)->nullable()->default('na');
            $table->decimal('total', 12, 0)->nullable()->default(0);
            $table->decimal('discounted_total', 12, 0)->nullable()->default(0);
            $table->decimal('discounted_non_refundable_total', 12, 0)->nullable()->default(0);
            $table->tinyInteger('currency_id')->nullable()->default(0);
            $table->string('currency', 15)->nullable()->default('na');
            $table->tinyInteger('is_direct')->nullable()->default(0);
            $table->tinyInteger('is_refundable')->nullable()->default(1);
            $table->tinyInteger('is_wedding')->nullable()->default(0);
            $table->tinyInteger('is_honeymoon')->nullable()->default(0);
            $table->tinyInteger('is_newly_wed')->nullable()->default(0);
            $table->tinyInteger('is_wedding_party')->nullable()->default(0);
            $table->tinyInteger('is_group')->nullable()->default(0);
            $table->tinyInteger('is_industry_partner')->nullable()->default(0);
            $table->tinyInteger('is_travel_agent')->nullable()->default(0);
            $table->tinyInteger('is_fully_paid')->nullable()->default(0);
            $table->tinyInteger('is_fully_paid_at_hotel')->nullable()->default(0);
            $table->tinyInteger('has_transfer')->nullable()->default(0);
            $table->tinyInteger('has_car_rental')->nullable()->default(0);
            $table->tinyInteger('has_lounge')->nullable()->default(0);
            $table->boolean('has_flight')->nullable()->default(false);
            $table->tinyInteger('payment_status_id')->nullable()->default(0);
            $table->string('payment_status', 150)->nullable()->default('0');
            $table->double('payment_mode_id')->nullable()->default(0);
            $table->string('payment_mode', 765)->nullable()->default('na');
            $table->date('payment_date')->nullable();
            $table->tinyInteger('export_status')->nullable()->default(0);
            $table->date('exported_on')->nullable();
            $table->timestamp('reservation_timestamp')->useCurrentOnUpdate()->useCurrent();
            $table->boolean('analytics_pixel')->nullable()->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('group_quote_reservation');
    }
}
