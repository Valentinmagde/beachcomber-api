<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResellerAssignedRateCardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reseller_assigned_rate_card', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('reseller_id')->index('reseller_id');
            $table->integer('rate_card_id')->index('rate_card_id');
            $table->date('assigned_date');
            $table->date('applicable_date')->nullable();
            $table->boolean('active')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reseller_assigned_rate_card');
    }
}
