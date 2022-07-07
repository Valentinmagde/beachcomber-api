<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package', function (Blueprint $table) {
            $table->integer('package_id', true)->unique('package_id');
            $table->boolean('payable')->default(true)->comment('1- Yes, 0 -No');
            $table->boolean('is_group')->default(false);
            $table->boolean('is_event')->default(false);
            $table->boolean('is_individual')->default(true);
            $table->boolean('is_meal')->default(false);
            $table->tinyInteger('is_bundle')->default(0);
            $table->string('bg_color')->nullable()->default('#fff');
            $table->date('valid_from')->default('9999-12-31');
            $table->date('valid_to')->default('9999-12-31');
            $table->integer('parent_id')->nullable()->default(0);

            $table->unique(['package_id', 'valid_from', 'valid_to']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('package');
    }
}
