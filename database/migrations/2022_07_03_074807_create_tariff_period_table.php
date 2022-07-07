<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTariffPeriodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tariff_period', function (Blueprint $table) {
            $table->integer('tariff_period_id', true);
            $table->string('period_name')->default('NA');
            $table->decimal('yearly_budget', 10)->default(0);
            $table->decimal('weekly_budget', 10)->default(0);
            $table->decimal('monthly_budget', 10)->default(0);
            $table->char('currency', 5)->default('EUR');
            $table->date('valid_from')->default('9999-12-31');
            $table->date('valid_to')->default('9999-12-31');
            $table->tinyInteger('active')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tariff_period');
    }
}
