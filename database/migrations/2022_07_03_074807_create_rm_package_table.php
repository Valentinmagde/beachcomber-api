<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRmPackageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rm_package', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('year_id');
            $table->integer('based_on_id');
            $table->string('code', 4);
            $table->string('name');
            $table->integer('is_default')->default(0);
            $table->integer('active')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rm_package');
    }
}
