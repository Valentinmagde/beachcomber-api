<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpaTreatmentMainDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spa_treatment_main_description', function (Blueprint $table) {
            $table->integer('spa_treatment_main_desc_id', true);
            $table->integer('spa_treatment_main_id')->default(0);
            $table->integer('language_id')->default(0);
            $table->text('description');
            $table->text('long_description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spa_treatment_main_description');
    }
}
