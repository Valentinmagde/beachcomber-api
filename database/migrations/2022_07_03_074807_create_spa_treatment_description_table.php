<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpaTreatmentDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spa_treatment_description', function (Blueprint $table) {
            $table->integer('spa_treatment_desc_id', true);
            $table->integer('spa_treatment_id')->default(0)->index('spa_treatment_id');
            $table->smallInteger('language_id')->default(0)->index('language_id');
            $table->text('description');
            $table->text('treatment_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spa_treatment_description');
    }
}
