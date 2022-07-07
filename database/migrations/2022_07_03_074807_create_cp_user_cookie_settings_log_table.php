<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCpUserCookieSettingsLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cp_user_cookie_settings_log', function (Blueprint $table) {
            $table->bigInteger('User_Cookie_Setting_Log_ID', true);
            $table->string('User_Cookie_Setting_ID', 128);
            $table->string('ip_address', 128);
            $table->string('action_alias', 128);
            $table->text('remarks')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cp_user_cookie_settings_log');
    }
}
