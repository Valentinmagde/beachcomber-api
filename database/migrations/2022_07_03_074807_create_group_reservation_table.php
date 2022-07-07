<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupReservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_reservation', function (Blueprint $table) {
            $table->bigInteger('group_reservation_id', true);
            $table->date('group_reservation_date')->default('9999-12-31');
            $table->integer('client_type');
            $table->string('agency')->nullable();
            $table->integer('country_id');
            $table->integer('adults');
            $table->integer('children')->nullable();
            $table->date('check_in');
            $table->date('check_out');
            $table->text('remarks')->nullable();
            $table->integer('status')->default(1);
            $table->integer('agency_id');
            $table->date('expiry_date')->default('9999-12-31');
            $table->decimal('net_total', 10)->default(0);
            $table->decimal('total_extra', 10)->default(0);
            $table->decimal('total_discount', 10)->default(0);
            $table->decimal('total_accom', 10)->default(0);
            $table->integer('is_mail_sent')->default(0);
            $table->dateTime('last_mail_date')->nullable();
            $table->string('group_name')->nullable();
            $table->string('currency', 30);
            $table->integer('currency_id');
            $table->integer('language_id')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('group_reservation');
    }
}
