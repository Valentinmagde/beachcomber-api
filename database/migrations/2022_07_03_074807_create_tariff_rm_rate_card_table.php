<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTariffRmRateCardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tariff_rm_rate_card', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name', 250)->nullable();
            $table->string('printed_name');
            $table->integer('year_id');
            $table->integer('hotel_id')->nullable()->index('hotel_idx');
            $table->integer('currency_id')->nullable();
            $table->integer('market_id')->nullable();
            $table->integer('source_id')->nullable();
            $table->integer('rate_group_id')->nullable();
            $table->integer('rate_strategy_id')->default(1);
            $table->integer('season_id');
            $table->integer('child_condition_id');
            $table->integer('package_id');
            $table->integer('meal_rate_card_id');
            $table->date('date_issued')->nullable();
            $table->date('date_released')->nullable();
            $table->integer('released')->default(0);
            $table->smallInteger('verified')->default(0)->comment('when set to 1, ratecard is verified by evelyne and awaiting TO feedback');
            $table->integer('duplicated_from_id')->default(0);
            $table->integer('duplicated_option')->default(0);
            $table->float('duplicated_value', 10, 0)->default(0);
            $table->float('rate_multiplier', 10, 0)->default(0);
            $table->text('note')->nullable();
            $table->text('grid_manip_log')->nullable();
            $table->text('log')->nullable();
            $table->date('deleted_date')->default('9999-12-31');
            $table->string('deleted_username', 25)->nullable();
            $table->integer('exported')->default(0);
            $table->date('exported_date')->default('9999-12-31');
            $table->string('exported_username', 25)->nullable();
            $table->date('exported_deleted_date')->nullable();
            $table->string('exported_deleted_username', 25)->nullable();
            $table->date('exported_date_test')->nullable();
            $table->date('exported_deleted_date_test')->nullable();
            $table->tinyInteger('exported_test')->default(0);
            $table->string('exported_test_username', 25)->nullable();
            $table->string('exported_deleted_test_username', 25)->nullable();
            $table->tinyInteger('exported_cloud')->default(0);
            $table->date('exported_date_cloud')->nullable()->default('9999-12-31');
            $table->string('exported_cloud_username', 25)->nullable();
            $table->integer('active')->nullable()->default(1)->index('active');
            $table->tinyInteger('extended_test')->default(0);
            $table->date('extended_date_test')->nullable()->default('9999-12-31');
            $table->string('extended_test_username', 25)->nullable();
            $table->tinyInteger('extended')->default(0);
            $table->date('extended_date')->nullable()->default('9999-12-31');
            $table->string('extended_username', 25)->nullable();
            $table->tinyInteger('extended_cloud')->default(0);
            $table->string('extended_cloud_username', 25)->nullable();
            $table->date('extended_date_cloud')->nullable()->default('9999-12-31');
            $table->string('extended_result_error')->nullable();
            $table->string('	extended_result_test_error')->nullable();
            $table->string('extended_result_cloud_error')->nullable();

            $table->index(['id', 'active', 'hotel_id'], 'id_4');
            $table->index(['id', 'active'], 'id');
            $table->index(['id', 'active', 'released', 'hotel_id'], 'id_3');
            $table->index(['id', 'active', 'released'], 'id_2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tariff_rm_rate_card');
    }
}
