<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndustryPartnerDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('industry_partner_description', function (Blueprint $table) {
            $table->bigInteger('industry_partner_desc_id', true);
            $table->integer('industry_partner_id')->default(0);
            $table->text('description');
            $table->tinyInteger('language_id')->default(1);
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
        Schema::dropIfExists('industry_partner_description');
    }
}
