<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerTitleDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_title_description', function (Blueprint $table) {
            $table->integer('title_desc_id', true)->unique('title_desc_id');
            $table->integer('title_id')->default(0);
            $table->text('description');
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
        Schema::dropIfExists('customer_title_description');
    }
}
