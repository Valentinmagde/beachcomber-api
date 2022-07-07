<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelAttributeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_attribute', function (Blueprint $table) {
            $table->integer('hotel_attribute_id', true);
            $table->integer('hotel_id')->default(0);
            $table->smallInteger('attribute_id')->default(0);
            $table->text('attribute');
            $table->smallInteger('award_body_id')->default(0);
            $table->string('award_body');
            $table->text('logo');
            $table->text('link');
            $table->date('valid_from')->default('9999-12-31');
            $table->date('valid_to')->default('9999-12-31');
            $table->integer('ranking')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotel_attribute');
    }
}
