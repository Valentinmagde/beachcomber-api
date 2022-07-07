<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationTransferTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_transfer', function (Blueprint $table) {
            $table->bigInteger('reservation_transfer_id', true);
            $table->bigInteger('reservation_id')->default(0)->index('reservation_id');
            $table->tinyInteger('vehicle_type_id')->default(0);
            $table->string('arrival_flight')->default('na');
            $table->string('departure_flight')->default('na');
            $table->date('arrival_date')->default('9999-12-31');
            $table->date('departure_date')->default('9999-12-31');
            $table->string('transfer_from')->default('na');
            $table->string('transfer_to')->default('na');
            $table->tinyInteger('num_vehicle')->default(0);
            $table->integer('transfer_tariff_id')->default(0);
            $table->integer('transfer_rate_mode_id')->default(0);
            $table->decimal('adult_rate')->default(0);
            $table->decimal('child_rate')->default(0);
            $table->string('currency', 5)->default('MUR');
            $table->tinyInteger('currency_id')->default(0);
            $table->boolean('active')->default(true);
            $table->unsignedTinyInteger('user_id')->default(0);
            $table->string('user_name')->default('Auto');
            $table->timestamp('reservation_transfer_timestamp')->useCurrent();
            $table->tinyInteger('is_supplement')->default(0);
            $table->tinyInteger('num_supplements')->default(0);
            $table->bigInteger('dossier_id')->nullable();
            $table->dateTime('date_sent')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservation_transfer');
    }
}
