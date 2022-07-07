<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSliderImageRestrictionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slider_image_restriction', function (Blueprint $table) {
            $table->double('ID');
            $table->double('image_ID')->nullable();
            $table->double('Restriction_Type_ID')->nullable();
            $table->double('value')->nullable();
            $table->string('value_type', 192)->nullable();
            $table->timestamp('created')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('slider_image_restriction');
    }
}
