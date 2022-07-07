<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelPartnerDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_partner_description', function (Blueprint $table) {
            $table->integer('hotel_partner_description_id', true);
            $table->integer('hotel_partner_id');
            $table->integer('language_id');
            $table->text('short_description')->nullable();
            $table->text('long_description')->nullable();
            $table->text('partner_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotel_partner_description');
    }
}
