<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTariffRmPolicySiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tariff_rm_policy_site', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('policy_id')->index('policy_id');
            $table->integer('hotel_id');
            $table->date('assigned_date');
            $table->date('valid_from')->nullable();
            $table->date('valid_to')->nullable();
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
        Schema::dropIfExists('tariff_rm_policy_site');
    }
}
