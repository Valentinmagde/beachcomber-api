<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfferRmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offer_rm', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('offer_cat_id')->index('NewIndex2');
            $table->integer('offer_cat2_id');
            $table->integer('rebate_type_id')->default(6);
            $table->integer('year_id')->index('year_id');
            $table->integer('offer_type_id');
            $table->string('offer_type_name');
            $table->string('code', 10);
            $table->string('name');
            $table->string('printed_name');
            $table->text('description');
            $table->integer('currency_id');
            $table->integer('offer_rate_per_id')->default(0);
            $table->decimal('numeric_offer', 10)->nullable();
            $table->decimal('rebate_value');
            $table->smallInteger('rebate_at_begining_stay');
            $table->decimal('adult');
            $table->decimal('child');
            $table->decimal('teen');
            $table->decimal('infant');
            $table->decimal('adult_sharing');
            $table->decimal('child_sharing');
            $table->decimal('teen_sharing');
            $table->decimal('infant_sharing');
            $table->integer('offer_tariff_same_as_room_id');
            $table->integer('offer_tariff_same_as_season_type_id');
            $table->integer('offer_tariff_same_as_rate_type_id')->default(0);
            $table->integer('offer_allotment_from')->default(0);
            $table->integer('offer_allotment_to')->default(0);
            $table->text('gift_description');
            $table->integer('applicable_on_rates')->default(1);
            $table->integer('applicable_on_meals')->default(1);
            $table->integer('combinable_all');
            $table->integer('hotel_id')->default(0);
            $table->date('hotel_date')->default('9999-12-31');
            $table->integer('market_id')->default(0);
            $table->integer('country_id')->default(0);
            $table->date('country_date')->default('9999-12-31');
            $table->integer('reseller_id')->default(0);
            $table->date('reseller_date')->default('9999-12-31');
            $table->date('date_issued')->nullable()->default('9999-12-31');
            $table->tinyInteger('printable')->default(1);
            $table->tinyInteger('released')->default(1);
            $table->boolean('verified')->default(false);
            $table->integer('duplicate_from_id')->default(0);
            $table->text('note');
            $table->text('log');
            $table->date('last_modified')->nullable();
            $table->tinyInteger('exported')->default(0);
            $table->date('date_exported')->default('9999-12-31');
            $table->string('exported_username', 25)->nullable();
            $table->tinyInteger('exported_test')->nullable()->default(0);
            $table->date('date_exported_test')->nullable()->default('9999-12-31');
            $table->string('exported_test_username', 25)->nullable();
            $table->date('date_deleted_exported')->nullable()->default('9999-12-31');
            $table->tinyInteger('exported_cloud')->default(0);
            $table->date('date_exported_cloud')->nullable()->default('9999-12-31');
            $table->string('exported_cloud_username', 25)->nullable();
            $table->unsignedTinyInteger('active')->default(1)->index('active');
            $table->tinyInteger('extended_test')->default(0);
            $table->date('extended_date_test')->nullable()->default('9999-12-31');
            $table->string('extended_test_username', 25)->nullable();
            $table->tinyInteger('extended')->default(0);
            $table->date('extended_date')->nullable()->default('9999-12-31');
            $table->string('extended_username', 25)->nullable();
            $table->tinyInteger('extended_cloud')->default(0);
            $table->date('extended_date_cloud')->nullable()->default('9999-12-31');
            $table->string('extended_cloud_username', 25)->nullable();
            $table->string('extended_result_error')->nullable()->default('null');
            $table->string('extended_result_test_error')->nullable()->default('null');
            $table->string('extended_result_cloud_error')->nullable()->default('null');

            $table->index(['year_id', 'released', 'active'], 'NewIndex1');
            $table->unique(['id', 'year_id', 'active'], 'id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offer_rm');
    }
}
