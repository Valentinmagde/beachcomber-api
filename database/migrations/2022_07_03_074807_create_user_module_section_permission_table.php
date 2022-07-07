<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserModuleSectionPermissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_module_section_permission', function (Blueprint $table) {
            $table->integer('user_module_section_permission_id', true);
            $table->integer('user_group_id')->default(0);
            $table->integer('user_module_id')->default(0);
            $table->string('section')->default('');
            $table->tinyInteger('can_access')->default(1);
            $table->tinyInteger('can_read')->default(1);
            $table->tinyInteger('can_write')->default(0);
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
        Schema::dropIfExists('user_module_section_permission');
    }
}
