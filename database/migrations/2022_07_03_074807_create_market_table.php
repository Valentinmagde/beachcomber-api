<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('market', function (Blueprint $table) {
            $table->integer('market_id', true);
            $table->string('name', 80)->nullable();
            $table->string('currency', 5)->default('EUR');
            $table->string('rate_manager_market_name');
            $table->date('valid_from')->nullable()->default('9999-12-31');
            $table->date('valid_to')->nullable()->default('9999-12-31');
            $table->tinyInteger('exported_cloud')->nullable();
            $table->string('exported_cloud_username', 25)->nullable();
            $table->date('exported_date_cloud')->nullable();
            $table->tinyInteger('exported_test')->nullable();
            $table->string('exported_test_username', 25)->nullable();
            $table->date('exported_date_test')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('market');
    }
}
