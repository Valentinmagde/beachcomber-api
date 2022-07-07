<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCpCookieDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cp_cookie_description', function (Blueprint $table) {
            $table->bigInteger('Cookie_Description_ID', true);
            $table->bigInteger('Cookie_ID');
            $table->bigInteger('Language_ID');
            $table->text('cookie_purpose');
            $table->text('cookie_lifetime');
            $table->bigInteger('created_by');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate()->useCurrent();

            $table->unique(['Cookie_ID', 'Language_ID'], 'Cookie_UQ');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cp_cookie_description');
    }
}
