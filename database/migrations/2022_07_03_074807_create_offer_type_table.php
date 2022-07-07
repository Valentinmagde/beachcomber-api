<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfferTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offer_type', function (Blueprint $table) {
            $table->bigIncrements('offer_type_id');
            $table->unsignedInteger('offer_main_type_id')->nullable();
            $table->string('offer_type_code', 765)->nullable();
            $table->string('starlight_code', 765)->nullable();
            $table->string('hms_code', 765)->nullable();
            $table->boolean('used_for_pms_rate_plan')->nullable();
            $table->date('valid_from')->nullable();
            $table->date('valid_to')->nullable();
            $table->tinyInteger('calculation_ranking')->nullable();
            $table->tinyInteger('display_ranking')->nullable();
            $table->boolean('is_themed')->nullable();
            $table->string('bg_color', 765)->nullable();
            $table->string('text_color', 765)->nullable();
            $table->string('image_path', 765)->nullable();
            $table->string('image_name', 765)->nullable();
            $table->boolean('in_offer_list')->nullable();
            $table->boolean('is_available_online')->nullable();
            $table->boolean('is_standard')->unsigned()->default(false);
            $table->boolean('is_user_triggered')->unsigned()->default(false);
            $table->unsignedBigInteger('rm_offer_type_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offer_type');
    }
}
