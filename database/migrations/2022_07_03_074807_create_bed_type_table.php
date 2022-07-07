<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBedTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bed_type', function (Blueprint $table) {
            $table->increments('bed_type_id')->unique('bed_type_id');
            $table->string('bed_type')->nullable()->default('NA');
            $table->integer('htng_code')->default(0);
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
        Schema::dropIfExists('bed_type');
    }
}
