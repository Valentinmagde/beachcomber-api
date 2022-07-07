<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResellerOldTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reseller_old', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('company');
            $table->string('crs_name')->nullable();
            $table->string('contact')->nullable();
            $table->string('address')->nullable();
            $table->string('address2')->nullable();
            $table->string('other')->nullable();
            $table->string('city', 100)->nullable();
            $table->string('pcode', 20)->nullable();
            $table->string('phone', 30);
            $table->string('fax', 30)->nullable();
            $table->string('email')->nullable();
            $table->integer('days')->nullable();
            $table->integer('type_id')->nullable()->index('type_id');
            $table->integer('market_id')->nullable()->index('market_id');
            $table->integer('country_id')->nullable()->index('country_id');
            $table->integer('language_id')->nullable();
            $table->integer('payment_type_id')->nullable();
            $table->integer('account_id')->nullable();
            $table->integer('currency_id')->nullable();
            $table->integer('ground_handler_id')->nullable();
            $table->integer('rate_group_id')->index('rate_group_id');
            $table->integer('allot_group_id')->nullable();
            $table->string('debtor_code', 11)->nullable();
            $table->string('pms_code', 11);
            $table->text('comments')->nullable();
            $table->integer('year_id')->index('year_id');
            $table->integer('reseller_id');
            $table->integer('based_on_id');
            $table->integer('active')->default(1);

            $table->index(['id', 'active'], 'id');
            $table->index(['id', 'active', 'company'], 'id_2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reseller_old');
    }
}
