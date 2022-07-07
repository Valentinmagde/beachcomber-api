<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCronFlagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cron_flag', function (Blueprint $table) {
            $table->integer('cron_flag_id', true);
            $table->string('name')->nullable();
            $table->boolean('running')->nullable();
            $table->dateTime('last_ran')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cron_flag');
    }
}
