<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRmMealRateCardPublishLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rm_meal_rate_card_publish_log', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rate_card_id')->default(0);
            $table->string('action', 10)->comment('publish, unpublish');
            $table->string('target', 10)->comment('prod, test');
            $table->string('status', 10)->comment('success, failed');
            $table->timestamp('timestamp')->useCurrent();
            $table->string('user', 10)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rm_meal_rate_card_publish_log');
    }
}
