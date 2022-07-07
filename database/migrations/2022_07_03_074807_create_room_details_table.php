<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_details', function (Blueprint $table) {
            $table->bigIncrements('room_details_id');
            $table->integer('room_id')->default(0)->index('roomID');
            $table->tinyInteger('adult')->default(0);
            $table->tinyInteger('child')->default(0);
            $table->tinyInteger('teen')->default(0);
            $table->tinyInteger('infant')->default(0);
            $table->tinyInteger('adult_sharing')->default(0);
            $table->tinyInteger('child_sharing')->default(0);
            $table->tinyInteger('teen_sharing')->default(0);
            $table->tinyInteger('child_min_age')->default(5);
            $table->tinyInteger('child_max_age')->default(17);
            $table->tinyInteger('infant_min_age')->default(0);
            $table->tinyInteger('infant_max_age')->default(5);
            $table->tinyInteger('teen_min_age')->default(0);
            $table->tinyInteger('teen_max_age')->default(0);
            $table->integer('no_available')->default(0);
            $table->tinyInteger('no_person')->default(0);
            $table->unsignedSmallInteger('tariff_period_id')->default(0);
            $table->date('valid_from')->default('9999-12-31');
            $table->date('valid_to')->default('9999-12-31');
            $table->boolean('active')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('room_details');
    }
}
