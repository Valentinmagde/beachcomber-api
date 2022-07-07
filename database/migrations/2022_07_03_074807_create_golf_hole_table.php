<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGolfHoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('golf_hole', function (Blueprint $table) {
            $table->integer('Hole_id', true)->index('Hole_id');
            $table->double('Distance')->default(0);
            $table->decimal('Hole_Coordinate_x', 10, 5)->default(0);
            $table->decimal('Hole_Coordinate_y', 10, 5)->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('golf_hole');
    }
}
