<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackageDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package_description', function (Blueprint $table) {
            $table->integer('package_desc_id', true);
            $table->integer('package_id')->default(0)->index('package_id');
            $table->smallInteger('language_id')->default(0)->index('language_id');
            $table->text('name');
            $table->text('short_desc');
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
        Schema::dropIfExists('package_description');
    }
}
