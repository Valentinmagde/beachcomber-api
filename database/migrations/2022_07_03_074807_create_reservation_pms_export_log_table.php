<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationPmsExportLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_pms_export_log', function (Blueprint $table) {
            $table->bigIncrements('process_id');
            $table->unsignedBigInteger('reservation_id')->nullable()->index('resaidIDX');
            $table->date('process_for_business_date')->default('9999-12-31')->index('businessDateIDX');
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
        Schema::dropIfExists('reservation_pms_export_log');
    }
}
