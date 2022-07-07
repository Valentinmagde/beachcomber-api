<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelweddateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotelweddate', function (Blueprint $table) {
            $table->integer('hotel_wed_dates_id', true);
            $table->integer('hotel_id')->default(0);
            $table->date('wed_date')->default('9999-12-31');
            $table->integer('wed_type_id')->default(0);
            $table->enum('wed_status', ['o', 'c'])->default('c');
            $table->timestamp('timestamp')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotelweddate');
    }
}
