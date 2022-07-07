<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupQuoteReservationExtraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_quote_reservation_extra', function (Blueprint $table) {
            $table->double('group_reservation_extra_id');
            $table->double('group_reservation_id')->nullable();
            $table->double('service_id')->nullable();
            $table->binary('description')->nullable();
            $table->string('tariff_type', 75)->nullable();
            $table->double('tariff_type_id')->nullable();
            $table->decimal('adult_rate', 10, 0)->nullable();
            $table->decimal('child_rate', 10, 0)->nullable();
            $table->double('num_adult')->nullable();
            $table->double('num_child')->nullable();
            $table->double('num_nights')->nullable();
            $table->decimal('total', 10, 0)->nullable();
            $table->double('adult_qty')->nullable();
            $table->double('child_qty')->nullable();
            $table->decimal('adult_total', 10, 0)->nullable();
            $table->decimal('child_total', 10, 0)->nullable();
            $table->string('currency', 15)->nullable();
            $table->tinyInteger('currency_id')->nullable();
            $table->tinyInteger('active')->nullable()->default(1);
            $table->timestamp('group_reservation_extra_timestamp')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('group_quote_reservation_extra');
    }
}
