<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransferTypeDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfer_type_description', function (Blueprint $table) {
            $table->integer('transfer_type_desc_id', true);
            $table->integer('transfer_type_id')->default(0)->index('transfer_type_id');
            $table->text('transfer_type_description');
            $table->tinyInteger('language_id')->default(1)->index('language_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transfer_type_description');
    }
}
