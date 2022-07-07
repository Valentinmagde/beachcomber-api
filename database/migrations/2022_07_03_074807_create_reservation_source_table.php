<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationSourceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_source', function (Blueprint $table) {
            $table->increments('reservation_source_id');
            $table->string('reservation_source_name')->default('');
            $table->string('reservation_source_code')->default('Pub');
            $table->string('reservation_source_alias', 50)->default('');
            $table->char('reservation_hms_code', 1);
            $table->tinyInteger('reservation_source_rank')->default(0);
            $table->unsignedTinyInteger('rate_manager_id')->default(0);
            $table->unsignedInteger('rate_plan_id')->nullable()->default(8)->comment('Link to Tariff Cateorgy ID');
            $table->tinyInteger('active')->default(1);
            $table->date('exported_date_test')->nullable();
            $table->tinyInteger('exported_test')->nullable();
            $table->string('exported_test_username', 25)->nullable();
            $table->tinyInteger('exported_cloud')->nullable();
            $table->date('exported_date_cloud')->nullable();
            $table->string('exported_cloud_username', 25)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservation_source');
    }
}
