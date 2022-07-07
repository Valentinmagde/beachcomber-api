<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountryAsterixTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('country_asterix', function (Blueprint $table) {
            $table->integer('country_id', true)->comment('auto increment field');
            $table->char('code', 3)->default('0')->comment('company code');
            $table->string('name', 100)->default('')->comment('company name');
            $table->binary('flag');
            $table->char('category', 2)->default('');
            $table->string('iso_code2', 5)->default('');
            $table->string('iso_code3', 5)->default('');
            $table->integer('others')->default(1)->comment('1 for others');
            $table->integer('active')->default(1)->index('active')->comment('1 for active,0 for deleted');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('country_asterix');
    }
}
