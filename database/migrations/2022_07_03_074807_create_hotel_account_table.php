<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelAccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_account', function (Blueprint $table) {
            $table->integer('hotel_account_id', true);
            $table->integer('hotel_id');
            $table->tinyInteger('currency');
            $table->string('account_number', 256);
            $table->string('iban', 256)->nullable();
            $table->string('swift_code', 256)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotel_account');
    }
}
