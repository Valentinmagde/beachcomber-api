<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSliderAliasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slider_alias', function (Blueprint $table) {
            $table->integer('id', true)->unique('id');
            $table->string('alias', 256);
            $table->text('name')->nullable();
            $table->tinyInteger('hotel_id')->nullable();
            $table->timestamp('created')->useCurrentOnUpdate()->useCurrent();
            $table->text('folder_location');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('slider_alias');
    }
}
