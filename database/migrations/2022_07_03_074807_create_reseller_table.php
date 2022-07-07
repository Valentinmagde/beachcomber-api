<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResellerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reseller', function (Blueprint $table) {
            $table->integer('id', true);
            $table->unsignedBigInteger('rm_reseller_id')->default(0)->index('rm_reseller_id')->comment('id in in rate manager');
            $table->string('company');
            $table->string('crs_name')->nullable();
            $table->string('contact')->nullable();
            $table->string('address')->nullable();
            $table->string('address2')->nullable();
            $table->string('other')->nullable();
            $table->string('city', 100)->nullable();
            $table->string('pcode', 20)->nullable();
            $table->string('phone', 30)->nullable();
            $table->string('fax', 30)->nullable();
            $table->string('email')->nullable();
            $table->string('resa_email')->nullable()->comment('multiple email separated by \';\'');
            $table->string('resa_cc_email')->nullable()->comment('multiple email separated by \';\'');
            $table->integer('days')->nullable();
            $table->integer('type_id')->nullable()->index('type_id');
            $table->integer('market_id')->nullable()->index('market_id');
            $table->integer('country_id')->nullable()->index('country_id');
            $table->integer('language_id')->nullable();
            $table->integer('payment_type_id')->nullable();
            $table->integer('account_id')->nullable();
            $table->integer('currency_id')->nullable();
            $table->integer('ground_handler_id')->nullable();
            $table->integer('rate_group_id')->default(0)->index('rate_group_id');
            $table->integer('allot_group_id')->nullable();
            $table->string('debtor_code', 11)->nullable();
            $table->string('pms_code', 11)->default('na');
            $table->string('hms_code', 50)->nullable()->default('na');
            $table->text('comments')->nullable();
            $table->integer('year_id')->default(12)->index('year_id');
            $table->integer('reseller_id')->default(0);
            $table->integer('based_on_id')->default(0);
            $table->integer('active')->default(1);
            $table->string('country')->nullable();
            $table->string('region')->nullable();
            $table->integer('region_id')->nullable();
            $table->tinyInteger('city_id')->nullable();
            $table->string('website')->nullable();
            $table->string('vat_number')->nullable();
            $table->string('brn')->nullable();
            $table->string('payment_mode')->nullable();
            $table->tinyInteger('representative_id')->nullable();
            $table->string('representative')->nullable();
            $table->tinyInteger('iscontracted')->nullable()->default(0);
            $table->unsignedTinyInteger('is_ground_handler')->default(0);
            $table->unsignedTinyInteger('enable')->default(1);
            $table->tinyInteger('paid_by_id')->nullable();
            $table->tinyInteger('exported_cloud')->nullable();
            $table->string('exported_cloud_username', 25)->nullable();
            $table->date('exported_date_cloud')->nullable();
            $table->tinyInteger('exported_test')->nullable();
            $table->string('exported_test_username', 25)->nullable();
            $table->date('exported_date_test')->nullable();

            $table->index(['id', 'active', 'company'], 'id_2');
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
        Schema::dropIfExists('reseller');
    }
}
