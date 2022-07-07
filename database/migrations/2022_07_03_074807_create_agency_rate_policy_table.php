<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgencyRatePolicyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agency_rate_policy', function (Blueprint $table) {
            $table->bigInteger('agency_rate_policy_id', true);
            $table->bigInteger('agency_id')->default(0);
            $table->decimal('percentage_rate', 5)->default(0);
            $table->string('percentage_rate_type', 5)->default('down')->comment('up - increase/ down - decrease');
            $table->bigInteger('reference_market_id')->default(0)->comment('0 - Rack/Public');
            $table->string('reference_season')->default('na');
            $table->date('valid_from')->default('9999-12-31');
            $table->date('valid_to')->default('9999-12-31');
            $table->tinyInteger('active')->default(1);
            $table->string('created_by')->nullable();
            $table->dateTime('created_on')->nullable();
            $table->string('last_updated_by')->nullable();
            $table->dateTime('last_updated_on')->nullable();
            $table->string('deleted_by')->nullable();
            $table->dateTime('deleted_on')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agency_rate_policy');
    }
}
