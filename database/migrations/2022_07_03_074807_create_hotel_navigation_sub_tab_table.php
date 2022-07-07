<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelNavigationSubTabTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_navigation_sub_tab', function (Blueprint $table) {
            $table->integer('hotel_navigation_sub_tab_id', true);
            $table->smallInteger('menu_item_id')->default(0);
            $table->smallInteger('hotel_navigation_tab_id')->default(0);
            $table->smallInteger('tab_item_rank')->default(0);
            $table->integer('hotel_id')->default(0);
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
        Schema::dropIfExists('hotel_navigation_sub_tab');
    }
}
