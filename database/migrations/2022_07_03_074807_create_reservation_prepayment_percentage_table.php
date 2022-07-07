<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationPrepaymentPercentageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_prepayment_percentage', function (Blueprint $table) {
            $table->integer('reservation_prepayment_id', true);
            $table->smallInteger('hotel_id')->default(0);
            $table->decimal('Reservation_Prepayment_Percentage', 10, 0)->nullable();
            $table->date('valid_from')->nullable();
            $table->date('valid_to')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservation_prepayment_percentage');
    }
}
