<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractConditionRmSiteToDeleteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contract_condition_rm_site_to_delete', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('policy_id')->index('policy_id');
            $table->integer('hotel_id');
            $table->date('assigned_date');
            $table->date('valid_from')->nullable();
            $table->date('valid_to')->nullable()->default('9999-12-31');
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
        Schema::dropIfExists('contract_condition_rm_site_to_delete');
    }
}
