<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpaTreatmentTypeDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spa_treatment_type_description', function (Blueprint $table) {
            $table->integer('spa_treatment_type_desc_id', true);
            $table->integer('spa_treatment_type_id')->default(0);
            $table->smallInteger('language_id')->default(0);
            $table->text('description');
            $table->text('short_description');
            $table->text('category_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spa_treatment_type_description');
    }
}
