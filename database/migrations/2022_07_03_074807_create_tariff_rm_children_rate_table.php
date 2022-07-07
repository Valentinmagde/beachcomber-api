<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTariffRmChildrenRateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tariff_rm_children_rate', function (Blueprint $table) {
            $table->integer('id', true);
            $table->date('date_from');
            $table->date('date_to');
            $table->string('sh1', 60);
            $table->decimal('sh1_value', 10, 0);
            $table->string('sh2', 60);
            $table->decimal('sh2_value', 10, 0);
            $table->string('own1');
            $table->decimal('own1_value', 10);
            $table->integer('child_condition_id');
            $table->tinyInteger('version')->default(1);
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
        Schema::dropIfExists('tariff_rm_children_rate');
    }
}
