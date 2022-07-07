<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationPmsRefTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_pms_ref', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('reservation_id');
            $table->string('starlight_ref', 20);
            $table->string('hms_ref', 20);
            $table->boolean('active')->default(true);

            $table->index(['reservation_id', 'active'], 'reservation_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservation_pms_ref');
    }
}
