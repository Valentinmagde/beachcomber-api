<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigInteger('user_id', true);
            $table->integer('user_type_id')->default(0);
            $table->integer('user_group_id')->default(0);
            $table->string('user_surname')->default('0');
            $table->string('user_othername')->default('0');
            $table->string('user_email')->default('0');
            $table->string('user_jobtitle')->default('NA');
            $table->string('user_phone')->default('+230 601 9000');
            $table->string('user_name')->default('0');
            $table->string('user_password')->default('0');
            $table->tinyInteger('active')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
