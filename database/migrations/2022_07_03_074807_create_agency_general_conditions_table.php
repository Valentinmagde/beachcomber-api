<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgencyGeneralConditionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agency_general_conditions', function (Blueprint $table) {
            $table->bigInteger('condition_id', true);
            $table->integer('country_id')->default(105);
            $table->decimal('room_rate_percentage', 3, 1);
            $table->decimal('meal_rate_percentage', 3, 1);
            $table->dateTime('valid_from')->default('9999-12-31 00:00:00');
            $table->dateTime('valid_to')->default('9999-12-31 00:00:00');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agency_general_conditions');
    }
}
