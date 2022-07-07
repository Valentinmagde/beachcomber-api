<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCareerInterestDescTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('career_interest_desc', function (Blueprint $table) {
            $table->integer('career_interest_desc_id', true);
            $table->integer('career_interest_id');
            $table->string('description', 50)->nullable()->default('');
            $table->integer('language_id');
            $table->tinyInteger('active')->nullable()->default(1);

            $table->unique(['career_interest_id', 'language_id'], 'Career_Interest_Desc_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('career_interest_desc');
    }
}
