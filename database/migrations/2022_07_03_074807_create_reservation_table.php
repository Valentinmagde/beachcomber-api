<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation', function (Blueprint $table) {
            $table->bigInteger('reservation_id', true);
            $table->date('reservation_date')->default('9999-12-31');
            $table->string('client_type')->default('Public');
            $table->tinyInteger('client_type_id')->default(8)->index('clientTypeID');
            $table->tinyInteger('destination_id')->default(0);
            $table->integer('hotel_id')->default(0)->index('hotel_id');
            $table->date('check_in')->default('9999-12-31')->index('check_in');
            $table->date('check_out')->default('9999-12-31')->index('check_out');
            $table->tinyInteger('num_nights')->default(0);
            $table->tinyInteger('num_rooms')->default(0);
            $table->integer('country_id')->default(0);
            $table->string('agency')->default('na');
            $table->integer('agency_id')->default(0);
            $table->string('paying_agency')->default('na');
            $table->unsignedInteger('paying_agency_id')->default(0);
            $table->unsignedTinyInteger('paid_by_id')->default(2);
            $table->string('paid_by', 50)->default('Client');
            $table->string('agency_resa_no')->default('0');
            $table->unsignedInteger('ground_handler_id')->default(0);
            $table->string('ground_handler')->default('na');
            $table->tinyInteger('language_id')->default(1);
            $table->date('arrival_date')->default('9999-12-31');
            $table->date('departure_date')->default('9999-12-31');
            $table->string('arrival_flight')->default('na')->comment('arrival flight number');
            $table->string('arrival_flight_time', 5);
            $table->string('departure_flight')->default('na')->comment('departure flight number');
            $table->string('departure_flight_time', 5);
            $table->date('wedding_date')->default('9999-12-31');
            $table->smallInteger('adult')->default(0);
            $table->smallInteger('child')->default(0);
            $table->smallInteger('teen')->default(0);
            $table->smallInteger('infant')->default(0);
            $table->text('additional_request');
            $table->tinyInteger('status_id')->default(0)->index('status_id')->comment('[quote, confirm]');
            $table->string('status')->default('na');
            $table->tinyInteger('quote_status_id')->default(0);
            $table->string('quote_status')->default('na');
            $table->tinyInteger('meal_plan_id')->default(0);
            $table->string('meal_plan')->default('na');
            $table->string('package')->default('na');
            $table->decimal('total', 10)->default(0);
            $table->decimal('discounted_total', 10)->default(0);
            $table->decimal('discounted_non_refundable_total', 10)->default(0);
            $table->tinyInteger('currency_id')->default(0);
            $table->string('currency', 5)->default('na');
            $table->tinyInteger('is_block_off')->default(0);
            $table->tinyInteger('is_reported')->default(0)->comment('Quote is reported');
            $table->tinyInteger('is_direct')->default(0)->comment('flag to denote direct booking');
            $table->tinyInteger('is_refundable')->default(1);
            $table->tinyInteger('is_wedding')->default(0);
            $table->tinyInteger('is_honeymoon')->default(0);
            $table->tinyInteger('is_newly_wed')->default(0);
            $table->tinyInteger('is_wedding_party')->default(0);
            $table->tinyInteger('is_group')->default(0);
            $table->tinyInteger('is_industry_partner')->default(0);
            $table->tinyInteger('is_travel_agent')->default(0);
            $table->tinyInteger('is_fully_paid')->default(0);
            $table->tinyInteger('is_fully_paid_at_hotel')->default(0);
            $table->tinyInteger('has_transfer')->default(0);
            $table->tinyInteger('has_car_rental')->default(0);
            $table->tinyInteger('has_lounge')->default(0);
            $table->boolean('has_flight')->default(false)->comment('Used for aviation reservation');
            $table->boolean('has_issue')->default(false)->comment('Reservation has issue');
            $table->string('reservation_issue')->nullable()->comment('Reservation issue description');
            $table->string('reservation_source')->default('na');
            $table->unsignedInteger('reservation_source_id')->default(0);
            $table->string('reservation_type')->default('na');
            $table->unsignedInteger('reservation_type_id')->default(0);
            $table->tinyInteger('payment_status_id')->default(0)->comment('transaction code from payment gateway');
            $table->string('payment_status', 50)->default('0')->index('payment_status')->comment('transaction message from payment gateway');
            $table->integer('payment_mode_id')->default(0);
            $table->string('payment_mode')->default('na');
            $table->date('payment_date')->default('9999-12-31');
            $table->tinyInteger('export_status')->default(0);
            $table->date('exported_on')->default('9999-12-31');
            $table->timestamp('reservation_timestamp')->useCurrent();
            $table->boolean('analytics_pixel')->default(false);
            $table->date('option_date')->default('9999-12-31');
            $table->date('reminder_date')->default('9999-12-31');
            $table->string('group_name')->default('');
            $table->string('contact_person')->nullable()->default('na');
            $table->string('contact_email')->nullable();
            $table->string('pms_reservation_id')->default('na')->index('pmsResaIDX');
            $table->unsignedTinyInteger('pms_transaction_status_id')->default(1)->comment('1-Book,2-Modify,3-Cancel');
            $table->string('pms_transaction_status')->default('Book')->comment('Book,Modify,Cancel');
            $table->string('hms_transaction_status', 10)->default('Book')->comment('Book,Modify,Cancel');
            $table->string('hms_reservation_id')->nullable()->index('hmsResaIDX');
            $table->unsignedBigInteger('local_crs_id')->default(0)->comment('local crs ID when exported');
            $table->unsignedBigInteger('live_crs_id')->default(0)->index('liveCRSidIDX')->comment('Live CRS ID');
            $table->string('reported_crs_id')->default('0')->comment('Old CRS reported ref');
            $table->boolean('live_to_local_sending_flag')->unsigned()->default(false)->comment('if \'1\' the quote is being sent from cloud to local crs. used to not re-resend the quote if already being sent');
            $table->unsignedTinyInteger('user_id')->default(0);
            $table->string('user_name')->default('Auto');
            $table->string('system')->default('OBBEONE')->index('systemIDX')->comment('To define system creating the resa');
            $table->tinyInteger('export_hms_status')->default(0);
            $table->date('exported_hms_on')->default('9999-12-31');

            $table->index(['reservation_timestamp', 'status_id'], 'oceandba_timestamp_status_20180403');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservation');
    }
}
