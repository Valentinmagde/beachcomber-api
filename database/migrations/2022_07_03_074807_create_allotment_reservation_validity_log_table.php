<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllotmentReservationValidityLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allotment_reservation_validity_log', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->integer('allotment_id')->nullable();
            $table->integer('allotment_validity_id')->default(0);
            $table->date('day')->nullable();
            $table->string('note')->nullable();
            $table->dateTime('created')->nullable();
            $table->integer('reservation_id')->default(0);
            $table->integer('reservation_details_id')->nullable()->default(0);
            $table->integer('user_id')->nullable()->default(0);
            $table->string('username', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('allotment_reservation_validity_log');
    }
}
