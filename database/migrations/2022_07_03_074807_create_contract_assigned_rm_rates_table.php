<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractAssignedRmRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contract_assigned_rm_rates', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('contract_id');
            $table->integer('ratecard_id');
            $table->integer('sort_order')->default(0);
            $table->integer('active')->nullable()->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contract_assigned_rm_rates');
    }
}
