<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRmPolicyContractTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rm_policy_contract', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('year_id');
            $table->integer('hotel_id');
            $table->integer('market_id');
            $table->string('name');
            $table->string('printed_name');
            $table->text('description');
            $table->integer('default')->default(0);
            $table->integer('sort_order')->default(0);
            $table->integer('active')->default(1);

            $table->index(['year_id', 'active'], 'year_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rm_policy_contract');
    }
}
