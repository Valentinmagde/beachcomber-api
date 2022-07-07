<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationRtImportLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_rt_import_log', function (Blueprint $table) {
            $table->bigIncrements('reservation_rt_id');
            $table->unsignedBigInteger('rtToken')->nullable();
            $table->unsignedBigInteger('unique_id')->nullable();
            $table->date('process_for_business_date')->default('9999-12-31');
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
        Schema::dropIfExists('reservation_rt_import_log');
    }
}
