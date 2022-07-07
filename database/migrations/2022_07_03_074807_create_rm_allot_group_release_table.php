<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRmAllotGroupReleaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rm_allot_group_release', function (Blueprint $table) {
            $table->integer('id', true);
            $table->date('date_from');
            $table->date('date_to');
            $table->string('assign_to');
            $table->string('description');
            $table->string('release');
            $table->integer('sort_order');
            $table->integer('allot_group_id');
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
        Schema::dropIfExists('rm_allot_group_release');
    }
}
