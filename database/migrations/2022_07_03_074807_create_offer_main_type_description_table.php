<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfferMainTypeDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offer_main_type_description', function (Blueprint $table) {
            $table->bigInteger('offer_main_type_desc_id', true);
            $table->integer('offer_main_type_id')->default(0);
            $table->text('description');
            $table->tinyInteger('language_id')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offer_main_type_description');
    }
}
