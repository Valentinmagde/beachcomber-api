<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfferMainTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offer_main_type', function (Blueprint $table) {
            $table->integer('offer_main_type_id', true)->unique('offer_main_type_id');
            $table->string('offer_main_type');
            $table->date('valid_from')->default('2014-01-31');
            $table->date('valid_to')->default('9999-12-31');
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
        Schema::dropIfExists('offer_main_type');
    }
}
