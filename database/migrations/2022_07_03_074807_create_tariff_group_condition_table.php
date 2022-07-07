<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTariffGroupConditionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tariff_group_condition', function (Blueprint $table) {
            $table->bigInteger('tariff_group_condition_id', true);
            $table->smallInteger('pax_from')->nullable()->default(0);
            $table->smallInteger('pax_to')->nullable()->default(0);
            $table->decimal('percentage_discount', 5, 0)->nullable()->default(0);
            $table->date('valid_from')->nullable()->default('9999-12-31');
            $table->date('valid_to')->nullable()->default('9999-12-31');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tariff_group_condition');
    }
}
