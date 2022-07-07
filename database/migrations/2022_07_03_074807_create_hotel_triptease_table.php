<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelTripteaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_triptease', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('hotel_id');
            $table->string('client_id', 16);
            $table->string('api_key', 256);
            $table->date('valid_from');
            $table->date('valid_to')->default('9999-12-31');
            $table->timestamp('created')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotel_triptease');
    }
}
