<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomStatusUploadLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_status_upload_log', function (Blueprint $table) {
            $table->bigInteger('process_id', true);
            $table->date('process_for_business_date')->default('9999-12-31');
            $table->string('process_message_type')->default('NA')->comment('Error, Warning, Info');
            $table->string('process_step_name')->default('NA');
            $table->text('process_step_message');
            $table->timestamp('process_step_timestamp')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('room_status_upload_log');
    }
}
