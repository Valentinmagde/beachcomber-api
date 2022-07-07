<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotationIntervalTypeDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotation_interval_type_description', function (Blueprint $table) {
            $table->integer('quote_interval_type_description_id', true);
            $table->integer('quote_interval_type_id')->default(0);
            $table->text('description');
            $table->tinyInteger('language_id')->default(1);
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
        Schema::dropIfExists('quotation_interval_type_description');
    }
}
