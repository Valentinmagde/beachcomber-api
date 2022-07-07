<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelReviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_review', function (Blueprint $table) {
            $table->bigInteger('review_id', true);
            $table->text('title');
            $table->text('description');
            $table->tinyInteger('general_rating')->default(0);
            $table->tinyInteger('spa_rating')->default(0);
            $table->tinyInteger('restaurant_rating')->default(0);
            $table->boolean('moderated');
            $table->string('moderator', 50);
            $table->boolean('rejected');
            $table->string('rejector', 50);
            $table->text('rejected_reason');
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
        Schema::dropIfExists('hotel_review');
    }
}
