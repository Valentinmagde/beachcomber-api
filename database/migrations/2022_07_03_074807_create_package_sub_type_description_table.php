<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackageSubTypeDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package_sub_type_description', function (Blueprint $table) {
            $table->integer('package_subtype_desc_id', true);
            $table->integer('package_subtype_id')->default(0);
            $table->smallInteger('language_id');
            $table->text('description');
            $table->text('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('package_sub_type_description');
    }
}
