<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelNavigationMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_navigation_menu', function (Blueprint $table) {
            $table->integer('hotel_navigation_menu_id', true);
            $table->smallInteger('menu_item_id')->nullable()->index('menu_item_id');
            $table->integer('hotel_id')->nullable()->index('hotel_id');
            $table->smallInteger('menu_item_rank')->default(0);
            $table->date('valid_from')->nullable()->default('9999-12-31');
            $table->date('valid_to')->nullable()->default('9999-12-31');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotel_navigation_menu');
    }
}
