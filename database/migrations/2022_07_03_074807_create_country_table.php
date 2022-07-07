<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('country', function (Blueprint $table) {
            $table->integer('country_id', true);
            $table->string('name', 30)->default('')->unique('name');
            $table->char('iso_code', 2)->default('')->index('country_iso_code_2');
            $table->char('iso_code_2', 2)->index('oceandba_iso_code_2_20171005');
            $table->char('iso_code_3', 3)->default('');
            $table->string('phone_country_code', 30)->nullable();
            $table->date('valid_from')->default('2012-12-31');
            $table->date('valid_to')->default('9999-12-31');

            $table->index(['iso_code_2', 'iso_code_3'], 'oceandba_iso_code_2_20171004');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('country');
    }
}
