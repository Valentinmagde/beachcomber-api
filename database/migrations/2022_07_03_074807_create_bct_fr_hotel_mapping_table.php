<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBctFrHotelMappingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bct_fr_hotel_mapping', function (Blueprint $table) {
            $table->integer('bct_hotel_mapping_id', true);
            $table->text('bct_fr_hotel_mapping');
            $table->integer('bch_hotel_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bct_fr_hotel_mapping');
    }
}
