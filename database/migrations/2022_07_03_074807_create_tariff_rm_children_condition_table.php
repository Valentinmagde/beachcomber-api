<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTariffRmChildrenConditionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tariff_rm_children_condition', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name');
            $table->string('printed_name');
            $table->text('description');
            $table->integer('currency_id')->default(0);
            $table->integer('source_id');
            $table->integer('season_id');
            $table->integer('hotel_id');
            $table->integer('market_id');
            $table->integer('rate_card_id');
            $table->integer('child_age1_id')->default(0);
            $table->integer('child_age2_id')->default(0);
            $table->integer('child_age3_id')->default(0);
            $table->integer('year_id');
            $table->tinyInteger('version')->default(1);
            $table->integer('active')->default(1);

            $table->index(['active', 'year_id'], 'active');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tariff_rm_children_condition');
    }
}
