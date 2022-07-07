<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSliderImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slider_image', function (Blueprint $table) {
            $table->integer('id', true);
            $table->text('title')->nullable();
            $table->text('alt');
            $table->mediumText('filename');
            $table->text('caption')->nullable();
            $table->integer('alias_id');
            $table->integer('restricted_country_id')->nullable()->default(0);
            $table->integer('restricted_language_id')->nullable()->default(0);
            $table->text('url')->nullable();
            $table->boolean('is_booking_url')->default(false);
            $table->boolean('is_url_target_blank')->nullable()->default(false);
            $table->timestamp('created')->useCurrent();
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
        Schema::dropIfExists('slider_image');
    }
}
