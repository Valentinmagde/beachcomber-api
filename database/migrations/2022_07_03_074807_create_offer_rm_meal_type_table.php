<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfferRmMealTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offer_rm_meal_type', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('offer_id');
            $table->integer('meal_type_id');
            $table->date('assigned_date');

            $table->index(['offer_id', 'meal_type_id'], 'offer_id_meal_type_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offer_rm_meal_type');
    }
}
