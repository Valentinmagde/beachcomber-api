<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractAssignedRmConditionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contract_assigned_rm_condition', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('policy_id');
            $table->integer('contract_id');
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
        Schema::dropIfExists('contract_assigned_rm_condition');
    }
}
