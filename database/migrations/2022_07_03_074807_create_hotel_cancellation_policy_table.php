<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelCancellationPolicyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_cancellation_policy', function (Blueprint $table) {
            $table->bigInteger('cancellation_policy_id', true);
            $table->tinyInteger('max_days_before_arrival')->default(7);
            $table->tinyInteger('min_days_before_arrival')->default(7);
            $table->decimal('penalty', 5)->default(0);
            $table->text('description');
            $table->date('valid_from')->default('9999-12-31');
            $table->date('valid_to')->default('9999-12-31');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotel_cancellation_policy');
    }
}
