<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantWineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurant_wine', function (Blueprint $table) {
            $table->integer('restaurant_wine_id', true);
            $table->integer('restaurant_id')->default(0);
            $table->date('valid_from')->default('9999-12-31');
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
        Schema::dropIfExists('restaurant_wine');
    }
}
