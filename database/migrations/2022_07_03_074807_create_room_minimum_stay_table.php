<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomMinimumStayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_minimum_stay', function (Blueprint $table) {
            $table->bigInteger('room_minimum_stay_id', true);
            $table->integer('room_id')->default(0)->index('room_id');
            $table->unsignedBigInteger('rm_minimum_stay_id')->default(0);
            $table->integer('minimum_stay')->default(0);
            $table->tinyInteger('policy_for')->default(0);
            $table->tinyInteger('client_type_id')->default(8);
            $table->string('client_type')->default('Rack');
            $table->date('valid_from')->default('9999-12-31');
            $table->date('valid_to')->default('9999-12-31');
            $table->tinyInteger('active')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('room_minimum_stay');
    }
}
