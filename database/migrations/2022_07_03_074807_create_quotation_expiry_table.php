<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotationExpiryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotation_expiry', function (Blueprint $table) {
            $table->bigInteger('quote_expiry_id', true);
            $table->bigInteger('quote_id')->default(0)->index('oceandba_quote_id');
            $table->dateTime('quote_date')->default('9999-12-31 00:00:00');
            $table->dateTime('quote_expiry_date')->default('9999-12-31 00:00:00');
            $table->integer('expiry_interval_type_id')->default(2);
            $table->string('expiry_interval_type', 10)->default('Days');
            $table->integer('expiry_interval')->default(0);
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
        Schema::dropIfExists('quotation_expiry');
    }
}
