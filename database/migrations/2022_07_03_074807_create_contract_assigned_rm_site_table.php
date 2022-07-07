<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractAssignedRmSiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contract_assigned_rm_site', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('contract_id')->index('contract_id');
            $table->integer('hotel_id')->index('hotel_id');
            $table->date('date_added');
            $table->integer('sort_order')->default(0);
            $table->integer('active')->nullable()->default(1);

            $table->index(['contract_id', 'hotel_id'], 'contractIDHotelID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contract_assigned_rm_site');
    }
}
