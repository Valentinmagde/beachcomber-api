<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelCancellationPolicyAssociationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_cancellation_policy_association', function (Blueprint $table) {
            $table->bigInteger('hotel_cancellation_policy_id', true);
            $table->bigInteger('cancellation_policy_id')->default(0);
            $table->integer('hotel_id')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotel_cancellation_policy_association');
    }
}
