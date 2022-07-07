<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRmUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rm_user', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('username', 10);
            $table->string('password');
            $table->string('firstname', 20);
            $table->string('lastname', 20);
            $table->string('permission', 20);
            $table->string('admin_permissions');
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
        Schema::dropIfExists('rm_user');
    }
}
