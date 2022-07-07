<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRmChildrenRateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rm_children_rate', function (Blueprint $table) {
            $table->integer('id', true);
            $table->date('date_from');
            $table->date('date_to');
            $table->string('sh1', 60);
            $table->string('sh2', 60);
            $table->string('own1');
            $table->integer('child_condition_id');
            $table->integer('active')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rm_children_rate');
    }
}
