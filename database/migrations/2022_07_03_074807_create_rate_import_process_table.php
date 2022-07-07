<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRateImportProcessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rate_import_process', function (Blueprint $table) {
            $table->bigInteger('process_id', true);
            $table->date('process_for_business_date')->default('9999-12-31');
            $table->string('event_type', 20)->default('Info');
            $table->text('process_event_message');
            $table->integer('hotel_id')->nullable();
            $table->string('hotel_name', 50)->nullable();
            $table->string('marketingPeriod', 20)->nullable();
            $table->string('market', 50)->nullable();
            $table->string('currency', 3)->nullable();
            $table->timestamp('process_event_timestamp')->useCurrent();

            $table->index(['hotel_id', 'marketingPeriod', 'market', 'currency'], 'rate_import_process_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rate_import_process');
    }
}
