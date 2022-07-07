<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpaTreatmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spa_treatment', function (Blueprint $table) {
            $table->integer('spa_treatment_id', true);
            $table->integer('spa_treatment_type_id')->default(0);
            $table->decimal('price', 7)->default(0);
            $table->char('currency', 3)->default('MUR');
            $table->integer('duration')->default(0);
            $table->smallInteger('duration_type_id')->default(0);
            $table->date('valid_from')->default('9999-12-31');
            $table->date('valid_to')->default('9999-12-31');
            $table->boolean('is_treatment')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spa_treatment');
    }
}
