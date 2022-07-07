<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRmRateCardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rm_rate_card', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name', 250)->nullable();
            $table->string('printed_name');
            $table->integer('year_id');
            $table->integer('hotel_id')->nullable();
            $table->integer('currency_id')->nullable();
            $table->integer('market_id')->nullable();
            $table->integer('source_id')->nullable();
            $table->integer('rate_group_id')->nullable();
            $table->integer('season_id');
            $table->integer('child_condition_id');
            $table->integer('package_id');
            $table->integer('meal_rate_card_id');
            $table->date('date_issued')->nullable();
            $table->date('date_released')->nullable();
            $table->integer('released')->default(0);
            $table->integer('duplicated_from_id');
            $table->integer('duplicated_option');
            $table->float('duplicated_value', 10, 0);
            $table->text('note');
            $table->text('grid_manip_log');
            $table->text('log');
            $table->integer('exported')->default(0);
            $table->date('exported_date');
            $table->integer('active')->nullable()->default(1)->index('active');

            $table->index(['id', 'active', 'released', 'hotel_id'], 'id_3');
            $table->index(['id', 'active', 'released'], 'id_2');
            $table->index(['id', 'active', 'hotel_id'], 'id_4');
            $table->index(['id', 'active'], 'id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rm_rate_card');
    }
}
