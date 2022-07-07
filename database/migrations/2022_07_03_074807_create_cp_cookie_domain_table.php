<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCpCookieDomainTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cp_cookie_domain', function (Blueprint $table) {
            $table->bigInteger('Cookie_Domain_ID', true);
            $table->string('cookie_domain', 128)->unique('Cookie_Domain_UQ');
            $table->string('cookie_party', 128);
            $table->string('privacy_policy_link')->nullable();
            $table->integer('created_by');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('upadted_at')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cp_cookie_domain');
    }
}
