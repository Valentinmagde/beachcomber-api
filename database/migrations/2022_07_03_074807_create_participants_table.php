<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('fid')->unique('fb_id');
            $table->tinyInteger('photo_id');
            $table->text('first_name');
            $table->text('last_name');
            $table->string('email');
            $table->text('gender');
            $table->string('locale', 10);
            $table->boolean('newsletter')->default(false);
            $table->integer('country_id')->default(0);
            $table->dateTime('created')->nullable()->useCurrent();

            $table->unique(['id'], 'id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participants');
    }
}
