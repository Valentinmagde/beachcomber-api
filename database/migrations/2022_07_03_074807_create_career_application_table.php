<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCareerApplicationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('career_application', function (Blueprint $table) {
            $table->integer('application_id', true);
            $table->integer('candidate_id');
            $table->integer('career_interest_id');
            $table->tinyInteger('mail_status')->nullable();
            $table->string('doc_name', 50)->nullable();
            $table->dateTime('applied_date')->nullable();
            $table->text('application_message')->nullable();

            $table->index(['candidate_id', 'career_interest_id', 'applied_date'], 'Career_Application_IDX');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('career_application');
    }
}
