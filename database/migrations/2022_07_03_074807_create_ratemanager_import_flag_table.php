<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatemanagerImportFlagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ratemanager_import_flag', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('rm_rate_card_id')->nullable();
            $table->unsignedInteger('rm_meal_rate_card_id')->nullable();
            $table->unsignedInteger('rm_offer_id')->nullable();
            $table->string('step', 10)->comment('PUBLISH or EXTEND');
            $table->timestamp('timestamp')->useCurrentOnUpdate()->useCurrent();
            $table->tinyInteger('processing_flag')->comment('1 or 0 if \'1\' step is still processing and unfinished');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ratemanager_import_flag');
    }
}
