<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelLocalMeasureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_local_measure', function (Blueprint $table) {
            $table->integer('local_measure_id', true);
            $table->integer('hotel_id')->nullable();
            $table->string('desktop_id')->nullable()->default('');
            $table->string('mobile_id')->nullable()->default('');
            $table->date('created')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotel_local_measure');
    }
}
