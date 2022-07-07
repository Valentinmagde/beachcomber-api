<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupQuotePackageRatesTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_quote_package_rates_type', function (Blueprint $table) {
            $table->bigInteger('quote_package_rates_type_id', true);
            $table->text('name');
            $table->dateTime('created');
            $table->dateTime('updated')->nullable()->default('9999-12-31 00:00:00');
            $table->date('valid_from')->default('9999-12-31');
            $table->date('valid_to')->default('9999-12-31');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('group_quote_package_rates_type');
    }
}
