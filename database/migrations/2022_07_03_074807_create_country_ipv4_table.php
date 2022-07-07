<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountryIpv4Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('country_ipv4', function (Blueprint $table) {
            $table->string('start_ipv4_address')->nullable();
            $table->string('end_ipv4_address');
            $table->unsignedDecimal('start_ip_num', 39, 0)->nullable();
            $table->unsignedDecimal('end_ip_num', 39, 0);
            $table->char('country_code_2', 2)->nullable();
            $table->char('country_code', 2)->nullable()->index('country_code');
            $table->string('country_name', 64)->nullable();

            $table->index(['end_ip_num', 'country_code', 'start_ip_num', 'country_name'], 'oceandba_iplookup_20171017bis');
            $table->index(['end_ip_num', 'start_ip_num', 'country_code'], 'oceandba_start_ip_num_end_ip_num3');
            $table->index(['country_code', 'end_ip_num', 'start_ip_num'], 'oceandba_start_ip_num_end_ip_num2');
            $table->index(['start_ip_num', 'end_ip_num', 'country_code'], 'oceandba_start_ip_num_end_ip_num');
            $table->index(['country_code', 'end_ip_num', 'start_ip_num', 'country_name'], 'oceandba_iplookup_20171017');
            $table->index(['country_code', 'start_ip_num', 'end_ip_num'], 'oceandba_start_ip_num_end_ip_num1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('country_ipv4');
    }
}
