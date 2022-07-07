<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNavigationMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('navigation_menu', function (Blueprint $table) {
            $table->integer('menu_item_id', true);
            $table->smallInteger('parent_id')->default(0)->index('parentID');
            $table->string('menu_item_folder', 100)->default('');
            $table->string('controller')->default('');
            $table->tinyInteger('is_link')->default(1);
            $table->tinyInteger('in_main_menu')->default(0);
            $table->tinyInteger('in_stacked_menu')->default(0);
            $table->boolean('in_group_factsheet_menu')->default(false);
            $table->boolean('in_factsheet_menu')->default(false);
            $table->text('link')->nullable();
            $table->string('class')->default('');
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
        Schema::dropIfExists('navigation_menu');
    }
}
