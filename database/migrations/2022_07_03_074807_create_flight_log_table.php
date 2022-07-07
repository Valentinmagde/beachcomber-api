<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flight_log', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('devis_id')->nullable();
            $table->bigInteger('quote_id')->nullable();
            $table->integer('quote_room_id')->nullable();
            $table->integer('code')->nullable();
            $table->string('status', 64)->nullable();
            $table->text('packet')->nullable();
            $table->timestamp('created')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flight_log');
    }
}
