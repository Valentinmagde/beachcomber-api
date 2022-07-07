<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationDetailsRoomFeatureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_details_room_feature', function (Blueprint $table) {
            $table->bigInteger('reservation_details_room_feature_id', true);
            $table->bigInteger('reservation_id')->default(0);
            $table->bigInteger('reservation_details_id')->default(0);
            $table->unsignedInteger('room_extra_feature_id')->default(0);
            $table->tinyInteger('active')->default(1);
            $table->integer('user_id')->default(0);
            $table->string('user_name')->default('Auto');
            $table->timestamp('reservation_details_room_feature_timestamp')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservation_details_room_feature');
    }
}
