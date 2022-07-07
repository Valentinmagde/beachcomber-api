<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndustryPartnerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('industry_partner', function (Blueprint $table) {
            $table->integer('industry_partner_id', true);
            $table->integer('tariff_category_id')->default(5);
            $table->date('valid_from')->default('2014-08-01');
            $table->date('valid_to')->default('9999-12-31');
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
        Schema::dropIfExists('industry_partner');
    }
}
