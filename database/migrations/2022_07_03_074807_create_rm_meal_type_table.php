<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRmMealTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rm_meal_type', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name');
            $table->integer('sort_order')->nullable()->default(0);
            $table->integer('default')->nullable()->default(1);
            $table->integer('hotel_id')->nullable()->default(0);
            $table->integer('active')->default(1)->index('active');

            $table->index(['id'], 'id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rm_meal_type');
    }
}
