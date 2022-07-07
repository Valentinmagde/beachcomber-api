<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransferTypeDescriptionCopyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfer_type_description_copy', function (Blueprint $table) {
            $table->integer('transfer_type_desc_id')->default(0);
            $table->integer('transfer_type_id')->default(0);
            $table->text('transfer_type_description');
            $table->tinyInteger('language_id')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transfer_type_description_copy');
    }
}
