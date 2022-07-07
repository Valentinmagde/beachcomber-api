<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCpUserCookieSettingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cp_user_cookie_setting', function (Blueprint $table) {
            $table->bigIncrements('User_Cookie_Setting_ID');
            $table->string('user_BCH_Session_ID', 128);
            $table->string('initial_ip_address', 128);
            $table->boolean('strict_cookie')->default(false);
            $table->boolean('functional_cookie')->unsigned()->default(false);
            $table->boolean('analytic_cookie')->unsigned()->default(false);
            $table->boolean('commercial_cookie')->unsigned()->default(false);
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
        Schema::dropIfExists('cp_user_cookie_setting');
    }
}
