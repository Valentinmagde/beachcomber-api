<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransferTariffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfer_tariff', function (Blueprint $table) {
            $table->integer('transfer_tariff_id', true);
            $table->integer('transfer_type_id')->default(0);
            $table->integer('transfer_tariff_mode_id')->default(0);
            $table->tinyInteger('client_type_id')->default(8);
            $table->string('client_type')->default('Rack');
            $table->decimal('adult_rate')->default(0);
            $table->decimal('child_rate')->default(0);
            $table->decimal('infant_rate')->default(0);
            $table->tinyInteger('currency_id')->default(0);
            $table->string('currency', 5)->default('MUR');
            $table->tinyInteger('transfer_for')->default(0);
            $table->string('hms_code')->default('NA');
            $table->string('hms_child_code')->default('NA');
            $table->date('valid_from')->default('9999-12-31');
            $table->date('valid_to')->default('9999-12-31');
            $table->boolean('active')->default(true);
            $table->string('hms_teen_code')->default('NA');
            $table->string('hms_infant_code')->default('NA');
            $table->integer('year_id')->default(0);
            $table->string('log')->nullable()->default('NA');
            $table->boolean('transfer_hotel_for')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transfer_tariff');
    }
}
