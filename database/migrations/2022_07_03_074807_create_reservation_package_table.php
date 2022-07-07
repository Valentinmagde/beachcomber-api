<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationPackageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_package', function (Blueprint $table) {
            $table->bigInteger('reservation_package_id', true);
            $table->bigInteger('reservation_id')->default(0)->index('reservation_id');
            $table->integer('package_id')->default(0)->index('package_id');
            $table->integer('package_tariff_id')->default(0)->index('package_tariff_id');
            $table->boolean('package_is_wedding')->default(false);
            $table->boolean('package_is_meal')->default(false);
            $table->boolean('package_is_event')->default(false);
            $table->text('package_main');
            $table->text('package_name');
            $table->text('remarks')->nullable();
            $table->boolean('active')->default(true);
            $table->unsignedTinyInteger('user_id')->default(0);
            $table->string('user_name')->default('Auto');
            $table->timestamp('reservation_package_timestamp')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservation_package');
    }
}
