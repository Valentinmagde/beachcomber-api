<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAwardBodyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('award_body', function (Blueprint $table) {
            $table->smallIncrements('award_body_id');
            $table->string('award_body')->nullable();
            $table->tinyInteger('active')->nullable()->default(1);
            $table->date('valid_from')->nullable();
            $table->date('valid_to')->nullable()->default('9999-12-31');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('award_body');
    }
}
