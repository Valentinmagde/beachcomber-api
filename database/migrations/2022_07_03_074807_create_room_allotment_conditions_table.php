<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomAllotmentConditionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_allotment_conditions', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->integer('id_hotel')->default(0)->index('id_hotel');
            $table->bigInteger('id_room')->default(0)->index('id_room');
            $table->smallInteger('client_type_id')->default(8);
            $table->string('release_type', 25)->default('None');
            $table->integer('no_days')->default(0);
            $table->date('specific_date')->default('9999-12-31');
            $table->text('comment');
            $table->integer('units')->default(0);
            $table->tinyInteger('allotment_for')->default(0);
            $table->tinyInteger('active')->default(1);
            $table->timestamp('refill_date')->useCurrentOnUpdate()->useCurrent();
            $table->integer('type')->default(2);
            $table->integer('tariff_period_id')->default(0);
            $table->binary('code')->nullable()->default('null');
            $table->date('arrival')->nullable();
            $table->date('departure')->nullable();
            $table->integer('nights')->nullable();
            $table->integer('reseller_id')->nullable()->default(0);
            $table->integer('company_id')->nullable()->default(0);
            $table->string('note')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('room_allotment_conditions');
    }
}
