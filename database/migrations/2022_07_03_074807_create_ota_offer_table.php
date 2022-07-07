<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOtaOfferTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ota_offer', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('alias', 64);
            $table->text('Name');
            $table->tinyInteger('percentage');
            $table->boolean('status')->default(true);
            $table->dateTime('valid_from')->default('0000-01-01 00:00:00');
            $table->dateTime('valid_to')->default('9999-12-31 23:59:59');
            $table->timestamp('created')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ota_offer');
    }
}
