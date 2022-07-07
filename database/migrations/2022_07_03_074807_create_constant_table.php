<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConstantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('constant', function (Blueprint $table) {
            $table->bigInteger('constant_id', true);
            $table->string('constant_name')->nullable();
            $table->text('constant_value')->nullable();
            $table->string('constant_for')->nullable();
            $table->tinyInteger('language_id')->nullable()->default(1);
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
        Schema::dropIfExists('constant');
    }
}
