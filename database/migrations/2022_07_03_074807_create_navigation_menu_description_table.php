<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNavigationMenuDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('navigation_menu_description', function (Blueprint $table) {
            $table->smallInteger('menu_item_desc_id', true);
            $table->smallInteger('menu_item_id')->default(0)->index('menu_item_id');
            $table->smallInteger('language_id')->default(0)->index('language_id');
            $table->text('description');
            $table->text('alias_description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('navigation_menu_description');
    }
}
