<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientAccountGdpr18Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_account_gdpr18', function (Blueprint $table) {
            $table->bigInteger('customer_login_id', true);
            $table->integer('customer_id');
            $table->string('username');
            $table->string('password');
            $table->date('last_login_date')->default('9999-12-31');
            $table->date('valid_from')->default('9999-12-31');
            $table->date('valid_to')->default('9999-12-31');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_account_gdpr18');
    }
}
