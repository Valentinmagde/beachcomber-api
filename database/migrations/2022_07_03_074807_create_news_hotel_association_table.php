<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsHotelAssociationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_hotel_association', function (Blueprint $table) {
            $table->bigInteger('news_association_id', true);
            $table->bigInteger('news_id')->default(0);
            $table->integer('hotel_id')->default(0);
            $table->date('valid_from')->nullable()->default('2016-02-12');
            $table->date('valid_to')->nullable()->default('9999-12-31');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news_hotel_association');
    }
}
