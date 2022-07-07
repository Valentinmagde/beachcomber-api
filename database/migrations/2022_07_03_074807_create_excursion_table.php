<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExcursionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('excursion', function (Blueprint $table) {
            $table->tinyInteger('excursion_id', true);
            $table->string('excursion_name');
            $table->integer('country_id')->default(129);
            $table->tinyInteger('region_id')->nullable();
            $table->date('valid_from')->default('2016-01-01');
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
        Schema::dropIfExists('excursion');
    }
}
