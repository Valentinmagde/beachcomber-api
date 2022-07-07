<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePayboxConfigurationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paybox_configuration', function (Blueprint $table) {
            $table->integer('config_id', true);
            $table->string('config_name')->default('NA');
            $table->text('config_value');
            $table->string('config_category')->default('NA');
            $table->tinyInteger('config_for')->default(2)->comment('0-preprod only,1-live only,2-both');
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
        Schema::dropIfExists('paybox_configuration');
    }
}
