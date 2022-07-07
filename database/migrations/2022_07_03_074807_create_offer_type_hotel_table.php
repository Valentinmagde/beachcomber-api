<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfferTypeHotelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offer_type_hotel', function (Blueprint $table) {
            $table->integer('hotel_offer_type_id', true);
            $table->integer('hotel_id')->default(0);
            $table->integer('offer_type_id')->default(0);
            $table->string('bg_color')->nullable();
            $table->string('image_name')->nullable();
            $table->string('image_path')->nullable();
            $table->tinyInteger('display_ranking')->default(0);
            $table->tinyInteger('in_offer_list')->default(1);
            $table->date('valid_from')->default('2011-11-01');
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
        Schema::dropIfExists('offer_type_hotel');
    }
}
