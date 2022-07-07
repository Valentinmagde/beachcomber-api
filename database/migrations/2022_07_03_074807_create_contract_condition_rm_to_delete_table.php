<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractConditionRmToDeleteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contract_condition_rm_to_delete', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('year_id');
            $table->integer('hotel_id')->default(0);
            $table->integer('market_id')->default(0);
            $table->string('name');
            $table->string('printed_name');
            $table->text('description');
            $table->integer('default')->default(0);
            $table->integer('has_attached_allot')->default(0);
            $table->integer('is_properties_ratecards')->default(0);
            $table->integer('sort_order')->default(0);
            $table->integer('active')->default(1);
            $table->integer('for_hotel')->default(0);
            $table->integer('for_market')->default(0);

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
        Schema::dropIfExists('contract_condition_rm_to_delete');
    }
}
