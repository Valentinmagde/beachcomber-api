<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountryIpv4CopyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('country_ipv4_copy', function (Blueprint $table) {
            $table->string('start_ipv4_address')->nullable();
            $table->string('end_ipv4_address')->nullable();
            $table->bigInteger('start_ip_num')->nullable();
            $table->bigInteger('end_ip_num')->nullable();
            $table->string('country_code_2')->nullable()->index('countryCode2')->comment('Contains temporary country code until USD issue is resolved');
            $table->string('country_code')->nullable()->comment('Contains real country code');
            $table->string('country_name')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('country_ipv4_copy');
    }
}
