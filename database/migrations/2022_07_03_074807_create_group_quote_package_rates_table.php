<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupQuotePackageRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_quote_package_rates', function (Blueprint $table) {
            $table->bigInteger('quote_package_rates_id', true);
            $table->text('name');
            $table->dateTime('created');
            $table->dateTime('updated');
            $table->bigInteger('quote_package_rates_type_id');
            $table->bigInteger('destination_id');
            $table->decimal('rates')->default(0);
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
        Schema::dropIfExists('group_quote_package_rates');
    }
}
