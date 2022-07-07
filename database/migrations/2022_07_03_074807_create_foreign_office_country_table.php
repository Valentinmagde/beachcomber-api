<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignOfficeCountryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foreign_office_country', function (Blueprint $table) {
            $table->bigInteger('foreign_country_id', true);
            $table->integer('country_id')->default(0);
            $table->integer('foreign_office_id')->default(0)->index('foreign_office_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foreign_office_country');
    }
}
