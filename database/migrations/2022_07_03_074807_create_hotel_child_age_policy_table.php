<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelChildAgePolicyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_child_age_policy', function (Blueprint $table) {
            $table->integer('Hotel_Child_Age_Policy_id', true);
            $table->integer('hotel_id');
            $table->date('date_from')->nullable()->default('9999-12-31');
            $table->date('date_to')->nullable()->default('9999-12-31');
            $table->tinyInteger('infant_min_age')->nullable();
            $table->tinyInteger('infant_max_age')->nullable();
            $table->tinyInteger('child_min_age')->nullable();
            $table->tinyInteger('child_max_age')->nullable();
            $table->tinyInteger('teen_min_age')->nullable();
            $table->tinyInteger('teen_max_age')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotel_child_age_policy');
    }
}
