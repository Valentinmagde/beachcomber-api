<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelTripadvisorRatingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_tripadvisor_rating', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->tinyInteger('hotel_id')->nullable();
            $table->integer('property_id')->nullable();
            $table->decimal('rating', 5)->nullable();
            $table->integer('rating_num')->nullable();
            $table->text('rating_image')->nullable();
            $table->text('subratings')->nullable();
            $table->dateTime('created')->nullable();
            $table->timestamp('updated')->useCurrentOnUpdate()->useCurrent();
            $table->text('link');
            $table->boolean('status')->nullable()->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotel_tripadvisor_rating');
    }
}
