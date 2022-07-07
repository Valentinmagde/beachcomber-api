<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomExportedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_exported', function (Blueprint $table) {
            $table->increments('room_exported_id');
            $table->integer('room_id')->unsigned();
            $table->date('exported_date_test')->default('9999-12-31');
            $table->tinyInteger('exported_test')->default(0);
            $table->string('exported_test_username', 255)->nullable();
            $table->date('exported_date_cloud')->default('9999-12-31');
            $table->tinyInteger('exported_cloud')->default(0);
            $table->string('exported_cloud_username', 255)->nullable();

            $table->foreign('room_id')
                  ->references('room_id')
                  ->on('room')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('room_exported');
    }
}
