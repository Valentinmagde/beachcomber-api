<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTariffRmChildAgeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tariff_rm_child_age', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name', 100);
            $table->string('meal_rate_name', 100);
            $table->string('child_rate_name', 100);
            $table->integer('default')->default(0);
            $table->integer('type')->default(1);
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
        Schema::dropIfExists('tariff_rm_child_age');
    }
}
