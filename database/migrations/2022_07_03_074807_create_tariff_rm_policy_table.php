<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTariffRmPolicyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tariff_rm_policy', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('year_id')->index('year_id');
            $table->integer('hotel_id')->default(0);
            $table->integer('market_id');
            $table->integer('source_id')->default(0);
            $table->string('name');
            $table->string('printed_name');
            $table->text('description');
            $table->integer('sort_order')->default(0);
            $table->integer('active')->default(1)->index('active');

            $table->index(['hotel_id', 'active'], 'hotel_id');
            $table->index(['id', 'year_id', 'active'], 'id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tariff_rm_policy');
    }
}
