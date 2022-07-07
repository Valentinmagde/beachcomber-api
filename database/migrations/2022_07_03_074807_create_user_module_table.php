<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserModuleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_module', function (Blueprint $table) {
            $table->integer('user_module_id', true);
            $table->unsignedSmallInteger('user_module_system_id')->default(1)->comment('Denote where modules would be used e.g CRS, CMS');
            $table->unsignedInteger('user_module_parent_id')->default(0)->comment('0: primary module else child module of parent_id');
            $table->string('module_name')->default('na');
            $table->string('module_alias')->default('na');
            $table->text('module_link');
            $table->string('module_type')->default('na');
            $table->string('module_controller', 75)->default('');
            $table->string('module_action', 125)->default('');
            $table->string('module_icon', 75)->default('');
            $table->unsignedTinyInteger('is_crs_module')->default(0)->comment('1: crs 2: legacy backoffice');
            $table->unsignedTinyInteger('sort_order')->nullable()->default(0);
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
        Schema::dropIfExists('user_module');
    }
}
