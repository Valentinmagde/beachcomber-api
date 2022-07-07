<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantReservationDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurant_reservation_description', function (Blueprint $table) {
            $table->integer('restaurant_reservation_desc_id', true);
            $table->integer('restaurant_reservation_type_id');
            $table->integer('language_id');
            $table->string('description', 50);
            $table->tinyInteger('reservation_desc_active')->nullable()->default(1);

            $table->index(['restaurant_reservation_type_id', 'language_id'], 'Restaurant_Reservation_Description_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurant_reservation_description');
    }
}
