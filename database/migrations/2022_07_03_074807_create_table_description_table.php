<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_description', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('description_parent_fieldname')->nullable();
            $table->string('description_parent_table')->nullable();
            $table->string('description_table')->nullable();
            $table->string('description_fieldname')->nullable();
            $table->string('description_id_fieldname')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_description');
    }
}
