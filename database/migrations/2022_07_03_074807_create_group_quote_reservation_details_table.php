<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupQuoteReservationDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_quote_reservation_details', function (Blueprint $table) {
            $table->double('group_reservation_details_id');
            $table->double('group_reservation_id')->nullable()->default(0);
            $table->double('tariff_id')->nullable()->default(0);
            $table->double('room_id')->nullable()->default(0);
            $table->double('room_num')->nullable()->default(1);
            $table->date('check_in')->nullable()->default('9999-12-31');
            $table->date('check_out')->nullable()->default('9999-12-31');
            $table->double('num_nights')->nullable()->default(0);
            $table->double('num_rooms')->nullable()->default(0);
            $table->double('adult')->nullable()->default(0);
            $table->double('child')->nullable()->default(0);
            $table->double('teen')->nullable()->default(0);
            $table->double('infant')->nullable()->default(0);
            $table->double('adult_sharing')->nullable()->default(0);
            $table->double('child_sharing')->nullable()->default(0);
            $table->double('teen_sharing')->nullable()->default(0);
            $table->decimal('adult_rate', 12, 0)->nullable()->default(0);
            $table->decimal('child_rate', 12, 0)->nullable()->default(0);
            $table->decimal('teen_rate', 12, 0)->nullable()->default(0);
            $table->decimal('discounted_adult_rate', 12, 0)->nullable()->default(0);
            $table->decimal('discounted_child_rate', 12, 0)->nullable()->default(0);
            $table->decimal('discounted_teen_rate', 12, 0)->nullable()->default(0);
            $table->decimal('total', 12, 0)->nullable()->default(0);
            $table->decimal('discounted_total', 12, 0)->nullable()->default(0);
            $table->tinyInteger('currency_id')->nullable()->default(0);
            $table->string('currency', 15)->nullable()->default('na');
            $table->boolean('active')->nullable()->default(true);
            $table->timestamp('reservation_details_timestamp')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('group_quote_reservation_details');
    }
}
