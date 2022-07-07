<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClubDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('club_description', function (Blueprint $table) {
            $table->integer('club_desc_id', true);
            $table->integer('club_id')->default(0);
            $table->smallInteger('language_id')->default(0);
            $table->text('short_description');
            $table->text('long_description');
            $table->text('information');
            $table->text('activities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('club_description');
    }
}
