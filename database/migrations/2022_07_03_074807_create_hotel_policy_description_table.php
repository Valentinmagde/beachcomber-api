<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelPolicyDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_policy_description', function (Blueprint $table) {
            $table->integer('hotel_policy_desc_id', true);
            $table->integer('hotel_policy_id')->default(0)->index('policyID');
            $table->smallInteger('language_id')->default(0)->index('languageID');
            $table->string('name')->default('');
            $table->text('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotel_policy_description');
    }
}
