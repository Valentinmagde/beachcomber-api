<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRmChildrenConditionSiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rm_children_condition_site', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('children_condition_id')->index('children_condition_id');
            $table->integer('hotel_id');
            $table->date('assigned_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rm_children_condition_site');
    }
}
