<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationOfferTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_offer', function (Blueprint $table) {
            $table->bigInteger('reservation_offer_id', true);
            $table->bigInteger('reservation_id')->default(0)->index('oceandba_reservation_id');
            $table->unsignedInteger('offer_id')->index('offer_id');
            $table->unsignedInteger('offer_type_id')->default(0);
            $table->string('offer_detail')->nullable()->default('na');
            $table->decimal('adult_discount', 5)->default(0);
            $table->decimal('child_discount', 5)->default(0);
            $table->unsignedTinyInteger('offer_on_rate')->default(0);
            $table->unsignedTinyInteger('offer_on_package')->default(0);
            $table->unsignedTinyInteger('active')->default(1);
            $table->unsignedTinyInteger('user_id')->default(0);
            $table->string('user_name')->default('Auto');
            $table->timestamp('reservation_offer_timestamp')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservation_offer');
    }
}
