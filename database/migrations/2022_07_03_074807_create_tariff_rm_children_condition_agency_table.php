<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTariffRmChildrenConditionAgencyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tariff_rm_children_condition_agency', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('children_condition_id')->index('children_condition_id');
            $table->integer('agency_id');
            $table->date('assigned_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tariff_rm_children_condition_agency');
    }
}
