<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRmRategroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rm_rategroup', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('based_on_id')->default(0);
            $table->integer('year_id');
            $table->string('code', 20)->nullable();
            $table->string('name');
            $table->integer('active')->default(1);

            $table->index(['id'], 'id');
            $table->index(['year_id', 'active'], 'year_id');
            $table->index(['id', 'year_id', 'active'], 'id_2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rm_rategroup');
    }
}
