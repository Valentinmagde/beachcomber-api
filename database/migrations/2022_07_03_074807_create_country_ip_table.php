<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountryIpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('country_ip', function (Blueprint $table) {
            $table->unsignedBigInteger('start_ip_num')->index('IPSTART');
            $table->unsignedInteger('end_ip_num')->index('IPEND');
            $table->string('country_code', 2);
            $table->timestamp('updated')->useCurrent();

            $table->unique(['start_ip_num', 'end_ip_num'], 'start_ip_num');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('country_ip');
    }
}
