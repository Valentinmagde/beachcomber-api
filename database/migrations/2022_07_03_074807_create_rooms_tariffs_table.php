<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTariffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms_tariffs', function (Blueprint $table) {
            $table->integer('id_r_tariff', true);
            $table->integer('id_room')->nullable()->index('rooms_tariff_fk');
            $table->date('tariff_from')->nullable()->index('tariff_from');
            $table->date('tariff_to')->nullable()->index('tariff_to');
            $table->string('tariff_claim', 25)->nullable();
            $table->string('tariff_claim_curr', 10)->nullable();
            $table->decimal('tariff_claim_child', 10, 3)->nullable();
            $table->decimal('tariff_claim_teen', 10, 3)->nullable();
            $table->decimal('tariff_claim_adult', 10, 3)->nullable()->default(0);
            $table->decimal('tariff_claim_other', 10, 3)->nullable()->default(0);
            $table->string('tariff_cost', 11)->nullable();
            $table->string('tariff_cost_curr', 10)->nullable();
            $table->decimal('tariff_cost_child', 10, 3)->nullable()->default(0);
            $table->decimal('tariff_cost_teen', 10, 3)->nullable()->default(0);
            $table->decimal('tariff_cost_adult', 10, 3)->nullable()->default(0);
            $table->decimal('tariff_cost_other', 10, 3)->nullable()->default(0);
            $table->string('tariff_bcot', 5)->nullable();
            $table->decimal('tariff_bcot_val', 10, 3)->nullable()->default(0);
            $table->integer('tariff_maxchild')->nullable()->default(0);
            $table->decimal('tariff_maxchild_val', 10, 3)->nullable()->default(0);
            $table->integer('tariff_maxteen')->nullable()->default(0);
            $table->decimal('tariff_maxteen_val', 10, 3)->nullable()->default(0);
            $table->integer('tariff_maxadult')->nullable()->default(0);
            $table->decimal('tariff_maxadult_val', 10, 3)->nullable()->default(0);
            $table->string('tariff_cost_bcot', 10)->nullable()->default('0');
            $table->float('tariff_cost_bcot_val', 10, 0)->nullable()->default(0);
            $table->integer('tariff_cost_maxchild')->nullable()->default(0);
            $table->decimal('tariff_cost_maxchild_val', 10, 3)->nullable()->default(0);
            $table->integer('tariff_cost_maxteen')->nullable()->default(0);
            $table->float('tariff_cost_maxteen_val', 10, 0)->nullable()->default(0);
            $table->integer('tariff_cost_maxadult')->nullable()->default(0);
            $table->decimal('tariff_cost_maxadult_val', 10, 3)->nullable()->default(0);
            $table->text('tariff_remarks')->nullable();
            $table->string('tariff_comm_type', 15)->default('None');
            $table->decimal('tariff_comm', 10, 3)->default(0);
            $table->integer('id_tariff_type')->default(0);
            $table->tinyInteger('active')->default(1);
            $table->tinyInteger('tariff_for')->nullable()->default(1)->index('tariff_for')->comment('0=all market,1=specific market,2=spec agn,3=spec group');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms_tariffs');
    }
}
