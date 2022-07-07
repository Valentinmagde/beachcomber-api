<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCareerCandidateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('career_candidate', function (Blueprint $table) {
            $table->integer('candidate_id', true);
            $table->string('candidate_title', 10);
            $table->string('candidate_surname', 50);
            $table->string('candidate_othernames', 50);
            $table->string('candidate_email', 50);
            $table->string('candidate_phone', 50)->nullable();
            $table->integer('country_id');

            $table->index(['candidate_email', 'country_id'], 'Career_Candidate_IDX');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('career_candidate');
    }
}
