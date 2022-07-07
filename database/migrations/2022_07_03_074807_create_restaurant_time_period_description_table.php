<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantTimePeriodDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurant_time_period_description', function (Blueprint $table) {
            $table->tinyInteger('time_period_desc_id', true);
            $table->tinyInteger('time_period_id');
            $table->tinyInteger('language_id')->nullable();
            $table->string('description', 256)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurant_time_period_description');
    }
}
