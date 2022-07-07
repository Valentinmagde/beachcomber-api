<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLanguageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('language', function (Blueprint $table) {
            $table->integer('language_id', true);
            $table->string('language', 20)->default('');
            $table->char('language_iso_code', 2)->default('');
            $table->string('language_flag_name', 50)->default('');
            $table->string('language_web', 20)->default('');
            $table->string('language_paybox', 3)->default('GBR');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('language');
    }
}
