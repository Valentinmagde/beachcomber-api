<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelPrivateclubDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_privateclub_description', function (Blueprint $table) {
            $table->integer('private_club_desc_id', true);
            $table->integer('private_club_id')->default(0);
            $table->smallInteger('language_id')->default(0);
            $table->text('description');
            $table->text('conditions');
            $table->text('included');
            $table->text('facility');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotel_privateclub_description');
    }
}
