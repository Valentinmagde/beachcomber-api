<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRmContractTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rm_contract', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('year_id')->index('year_id');
            $table->integer('contract_by')->default(1);
            $table->integer('reseller_id');
            $table->integer('market_id');
            $table->integer('country_id');
            $table->integer('currency_id');
            $table->integer('language_id');
            $table->string('contact_name');
            $table->date('date_from');
            $table->date('date_to');
            $table->string('allot_group', 11);
            $table->integer('allot_group_id')->default(0);
            $table->date('date_created');
            $table->text('log');
            $table->integer('active')->default(1)->index('active');

            $table->index(['id', 'year_id', 'active'], 'id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rm_contract');
    }
}
