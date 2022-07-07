<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfferDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offer_description', function (Blueprint $table) {
            $table->integer('offer_desc_id', true);
            $table->integer('offer_id')->default(0)->index('offer_id');
            $table->smallInteger('language_id')->default(0)->index('language_id');
            $table->text('title');
            $table->text('short_description')->nullable();
            $table->text('description')->nullable();
            $table->text('gift_description')->nullable();
            $table->text('conditions')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offer_description');
    }
}
