<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRmSiteRoomsNbTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rm_site_rooms_nb', function (Blueprint $table) {
            $table->integer('site_id');
            $table->integer('year_id');
            $table->integer('rooms_nb')->default(0);

            $table->primary(['site_id', 'year_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rm_site_rooms_nb');
    }
}
