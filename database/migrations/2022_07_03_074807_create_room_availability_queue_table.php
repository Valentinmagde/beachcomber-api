<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomAvailabilityQueueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_availability_queue', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pms_property_code', 8);
            $table->string('pms_room_code', 8)->index('pms_room_code');
            $table->text('htng_unique_id')->nullable();
            $table->date('start');
            $table->date('end');
            $table->timestamp('pms_timestamp')->nullable();
            $table->timestamp('created')->useCurrent()->index('created');
            $table->bigInteger('no_available')->default(0);
            $table->boolean('is_exported')->unsigned()->default(false);
            $table->boolean('skip')->nullable()->default(false);
            $table->text('log_text')->nullable();
            $table->string('pms_timestamp_string', 256)->nullable()->default('0');

            $table->index(['pms_property_code', 'is_exported'], 'pms_room_code_is_exported');
            $table->index(['start', 'pms_property_code'], 'oceandba_start_pms_property_code_20200304');
            $table->index(['is_exported', 'skip'], 'is_exported_skip');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('room_availability_queue');
    }
}
