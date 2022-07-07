<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomExtraFeatureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_extra_feature', function (Blueprint $table) {
            $table->increments('room_extra_feature_id')->unique('room_extra_feature_id');
            $table->string('room_extra_feature')->nullable()->default('NA');
            $table->string('htng_code')->default('NA');
            $table->string('pms_code', 10)->nullable()->comment('starlight code');
            $table->string('hms_code', 10)->nullable()->comment('hms code');
            $table->date('valid_from')->default('2018-10-15');
            $table->date('valid_to')->default('9999-12-31');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('room_extra_feature');
    }
}
