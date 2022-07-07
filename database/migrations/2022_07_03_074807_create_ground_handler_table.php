<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroundHandlerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ground_handler', function (Blueprint $table) {
            $table->bigInteger('ground_handler_id', true);
            $table->string('company');
            $table->string('crs_name')->nullable();
            $table->string('contact')->nullable();
            $table->string('address')->nullable();
            $table->string('address2')->nullable();
            $table->string('other')->nullable();
            $table->string('city', 100)->nullable();
            $table->string('pcode', 20)->nullable();
            $table->string('phone', 30);
            $table->string('fax', 30)->nullable();
            $table->string('email')->nullable();
            $table->string('resa_email')->nullable()->comment('multiple email separated by \';\'');
            $table->string('resa_cc_email')->nullable()->comment('multiple email separated by \';\'');
            $table->integer('country_id')->nullable();
            $table->string('debtor_code', 11)->nullable();
            $table->string('pms_code', 11);
            $table->string('hms_code', 11)->nullable();
            $table->text('comments')->nullable();
            $table->tinyInteger('active')->default(1);
            $table->integer('city_id')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ground_handler');
    }
}
