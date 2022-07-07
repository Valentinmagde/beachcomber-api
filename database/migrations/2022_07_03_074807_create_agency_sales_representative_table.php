<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgencySalesRepresentativeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agency_sales_representative', function (Blueprint $table) {
            $table->integer('rep_id', true);
            $table->integer('rep_country_id')->default(105);
            $table->string('rep_surname')->default('na');
            $table->string('rep_othername')->default('na');
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
        Schema::dropIfExists('agency_sales_representative');
    }
}
