<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelDescriptionAssociationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_description_association', function (Blueprint $table) {
            $table->integer('hotel_desc_assoc_id', true);
            $table->integer('hotel_desc_id')->default(0)->index('hotel_desc_id');
            $table->integer('hotel_id')->default(0)->index('hotelID');
            $table->string('association_for', 20)->default('Text');
            $table->date('valid_from')->default('9999-12-31');
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
        Schema::dropIfExists('hotel_description_association');
    }
}
