<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResaStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resa_status', function (Blueprint $table) {
            $table->increments('resa_status_id');
            $table->string('resa_status')->nullable()->default('NA');
            $table->unsignedTinyInteger('htng_code')->nullable()->default(0);
            $table->date('valid_from')->default('2018-10-15');
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
        Schema::dropIfExists('resa_status');
    }
}
