<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelMediaFeatureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_media_feature', function (Blueprint $table) {
            $table->bigInteger('hotel_media_feature_id', true);
            $table->bigInteger('media_id')->nullable()->default(0);
            $table->integer('hotel_id')->nullable()->default(0);
            $table->date('valid_from')->nullable()->default('9999-12-31');
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
        Schema::dropIfExists('hotel_media_feature');
    }
}
