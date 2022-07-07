<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeasonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('season', function (Blueprint $table) {
            $table->integer('season_id', true);
            $table->unsignedInteger('year_id')->default(0);
            $table->string('name')->nullable();
            $table->boolean('active')->nullable()->default(true);
            $table->date('exported_date_test')->nullable()->default('9999-12-31');
            $table->tinyInteger('exported_test')->nullable()->default(0);
            $table->string('exported_test_username')->nullable();
            $table->date('exported_date_cloud')->nullable()->default('9999-12-31');
            $table->tinyInteger('exported_cloud')->nullable()->default(0);
            $table->string('exported_cloud_username')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('season');
    }
}
