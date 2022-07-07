<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelPrivateclubTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_privateclub', function (Blueprint $table) {
            $table->integer('private_club_id', true);
            $table->integer('hotel_id')->default(0);
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
        Schema::dropIfExists('hotel_privateclub');
    }
}
