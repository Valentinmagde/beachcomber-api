<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupReservationToReservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_reservation_to_reservation', function (Blueprint $table) {
            $table->bigInteger('Group_Reservation_to_Reservation_id', true);
            $table->bigInteger('group_reservation_id');
            $table->bigInteger('reservation_id');
            $table->tinyInteger('destination_id')->default(0);
            $table->integer('hotel_id')->default(0);
            $table->date('check_in')->default('9999-12-31');
            $table->date('check_out')->default('9999-12-31');
            $table->tinyInteger('num_nights')->default(0);
            $table->tinyInteger('num_rooms')->default(0);
            $table->smallInteger('adult')->default(0);
            $table->smallInteger('child')->default(0);
            $table->smallInteger('teen')->default(0);
            $table->smallInteger('infant')->default(0);
            $table->text('additional_request');
            $table->tinyInteger('status_id')->default(0)->comment('[quote, confirm]');
            $table->string('status')->default('na');
            $table->tinyInteger('quote_status_id')->default(0);
            $table->string('quote_status')->default('na');
            $table->tinyInteger('meal_plan_id')->default(0);
            $table->string('meal_plan')->default('na');
            $table->string('package')->default('na');
            $table->decimal('total', 10)->default(0);
            $table->decimal('discounted_total', 10)->default(0);
            $table->decimal('discounted_non_refundable_total', 10)->default(0);
            $table->tinyInteger('is_fully_paid')->default(0);
            $table->tinyInteger('is_fully_paid_at_hotel')->default(0);
            $table->tinyInteger('has_transfer')->default(0);
            $table->tinyInteger('has_car_rental')->default(0);
            $table->tinyInteger('has_lounge')->default(0);
            $table->boolean('has_flight')->default(false)->comment('Used for aviation reservation');
            $table->tinyInteger('payment_status_id')->default(0)->comment('transaction code from payment gateway');
            $table->string('payment_status', 50)->default('0')->comment('transaction message from payment gateway');
            $table->integer('payment_mode_id')->default(0);
            $table->string('payment_mode')->default('na');
            $table->date('payment_date')->default('9999-12-31');
            $table->tinyInteger('export_status')->default(0);
            $table->date('exported_on')->default('9999-12-31');
            $table->timestamp('reservation_timestamp')->useCurrent();
            $table->boolean('analytics_pixel')->default(false);
            $table->boolean('active')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('group_reservation_to_reservation');
    }
}
