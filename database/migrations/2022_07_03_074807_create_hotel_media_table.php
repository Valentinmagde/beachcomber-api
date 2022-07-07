<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_media', function (Blueprint $table) {
            $table->bigInteger('media_id', true);
            $table->smallInteger('media_type_id')->default(0);
            $table->smallInteger('media_theme_id')->default(0);
            $table->integer('hotel_id')->default(0);
            $table->text('media_name');
            $table->text('media_code');
            $table->string('media_target', 100)->default('');
            $table->date('media_uploadDate')->default('9999-12-31');
            $table->string('media_filename', 150)->default('');
            $table->string('media_filesize', 50)->default('');
            $table->string('media_resolution', 50)->default('');
            $table->string('media_thumbnail', 150)->default('');
            $table->integer('media_default')->nullable()->default(0);
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
        Schema::dropIfExists('hotel_media');
    }
}
