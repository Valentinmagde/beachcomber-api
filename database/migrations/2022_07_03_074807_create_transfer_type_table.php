<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransferTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfer_type', function (Blueprint $table) {
            $table->integer('transfer_type_id', true);
            $table->integer('transfer_provider_id')->default(0);
            $table->tinyInteger('tariff_type_id')->default(2);
            $table->string('tariff_type')->default('Unit/Night');
            $table->integer('min_pax')->default(0);
            $table->integer('max_pax')->default(0);
            $table->integer('service_type_id')->default(0);
            $table->string('service_type', 5)->default('TF');
            $table->string('pms_code')->nullable()->default('TA 754');
            $table->string('hms_code', 15)->nullable();
            $table->date('valid_from')->default('9999-12-31');
            $table->date('valid_to')->default('9999-12-31');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transfer_type');
    }
}
