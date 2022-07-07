<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationAllotmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_allotment', function (Blueprint $table) {
            $table->integer('reservation_allotment_id', true);
            $table->integer('reservation_id')->default(0);
            $table->integer('reservation_details_id')->default(0);
            $table->integer('reseller_id')->nullable()->default(0);
            $table->integer('allotment_id')->default(0);
            $table->string('allotment_code')->nullable();
            $table->integer('quantity')->default(0);
            $table->boolean('status')->default(false);
            $table->string('note')->nullable();
            $table->timestamp('created')->nullable();
            $table->timestamp('updated')->nullable();
            $table->date('date')->nullable();
            $table->unsignedBigInteger('room_id')->nullable()->default(0);
            $table->tinyInteger('active')->nullable()->default(0);

            $table->index(['reservation_details_id', 'active'], 'reservation_details_id_active');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservation_allotment');
    }
}
