<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerConscentTypeDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_conscent_type_description', function (Blueprint $table) {
            $table->integer('concent_type_desc_id', true);
            $table->text('concent_type')->nullable();
            $table->tinyInteger('language_id')->nullable()->default(1);
            $table->integer('concent_type_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_conscent_type_description');
    }
}
