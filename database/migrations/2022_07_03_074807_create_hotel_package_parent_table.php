<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelPackageParentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_package_parent', function (Blueprint $table) {
            $table->bigIncrements('rm_package_id');
            $table->date('active_from')->nullable();
            $table->date('active_to')->nullable();
            $table->boolean('active')->unsigned()->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotel_package_parent');
    }
}
