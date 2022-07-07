<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMigrationReservationStarlightHmsDepositCheckTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('migration_reservation_starlight_hms_deposit_check', function (Blueprint $table) {
            $table->bigInteger('ID', true);
            $table->bigInteger('Reservation_ID');
            $table->integer('Hotel_ID');
            $table->string('interface_type', 64)->nullable();
            $table->dateTime('processed')->nullable();
            $table->boolean('is_exported')->default(false);
            $table->timestamp('created')->useCurrent();
            $table->boolean('to_be_migrated')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('migration_reservation_starlight_hms_deposit_check');
    }
}
