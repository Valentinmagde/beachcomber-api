<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_category', function (Blueprint $table) {
            $table->smallInteger('room_category_id', true);
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
        Schema::dropIfExists('room_category');
    }
}
