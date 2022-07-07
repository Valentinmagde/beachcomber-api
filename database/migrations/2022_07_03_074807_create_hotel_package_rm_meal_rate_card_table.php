<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelPackageRmMealRateCardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_package_rm_meal_rate_card', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('year_id');
            $table->integer('hotel_id')->default(0);
            $table->string('name');
            $table->string('printed_name');
            $table->text('description');
            $table->integer('currency_id')->default(0);
            $table->integer('source_id')->default(0);
            $table->integer('rate_card_id')->default(0);
            $table->integer('child_age0_id')->default(0);
            $table->integer('child_age1_id')->default(0);
            $table->integer('child_age2_id')->default(0);
            $table->tinyInteger('teen_same_as_child')->default(1);
            $table->tinyInteger('version')->default(1);
            $table->text('log')->nullable();
            $table->date('date_issued')->nullable();
            $table->boolean('released')->default(false);
            $table->boolean('verified')->default(false);
            $table->unsignedBigInteger('duplicated_from_id')->default(0);
            $table->string('duplicated_option', 25)->nullable();
            $table->string('duplicated_value', 25)->nullable();
            $table->date('deleted_date')->nullable()->default('9999-12-31');
            $table->string('deleted_username', 50)->nullable();
            $table->timestamp('last_modified')->useCurrent();
            $table->tinyInteger('exported')->default(0);
            $table->date('exported_date')->nullable();
            $table->string('exported_username', 10)->nullable();
            $table->tinyInteger('exported_test')->default(0);
            $table->date('exported_date_test')->nullable();
            $table->string('exported_test_username', 10)->nullable();
            $table->tinyInteger('exported_cloud')->default(0);
            $table->date('exported_date_cloud')->nullable()->default('9999-12-31');
            $table->string('exported_cloud_username', 25)->nullable();
            $table->integer('active')->default(1);
            $table->tinyInteger('extended_test')->default(0);
            $table->date('extended_date_test')->nullable()->default('9999-12-31');
            $table->string('extended_test_username', 25)->nullable();
            $table->tinyInteger('extended')->default(0);
            $table->date('extended_date')->nullable()->default('9999-12-31');
            $table->string('extended_username', 25)->nullable();
            $table->tinyInteger('extended_cloud')->default(0);
            $table->date('extended_date_cloud')->nullable()->default('9999-12-31');
            $table->string('extended_cloud_username', 25)->nullable();
            $table->string('extended_result_error')->nullable();
            $table->string('extended_result_test_error')->nullable();
            $table->string('extended_result_cloud_error')->nullable();

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
        Schema::dropIfExists('hotel_package_rm_meal_rate_card');
    }
}
