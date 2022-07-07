<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupReservationPackageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_reservation_package', function (Blueprint $table) {
            $table->double('group_reservation_package_id')->nullable();
            $table->double('group_reservation_id')->nullable();
            $table->double('package_id')->nullable();
            $table->double('package_tariff_id')->nullable();
            $table->boolean('package_is_wedding')->nullable();
            $table->boolean('package_is_meal')->nullable();
            $table->boolean('package_is_event')->nullable();
            $table->binary('package_main')->nullable();
            $table->binary('package_name')->nullable();
            $table->boolean('active')->nullable();
            $table->timestamp('group_reservation_package_timestamp')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('group_reservation_package');
    }
}
