<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupQuoteReservationPackageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_quote_reservation_package', function (Blueprint $table) {
            $table->bigInteger('quote_reservation_package_id', true);
            $table->bigInteger('quote_reservation_id');
            $table->bigInteger('package_id');
            $table->boolean('active')->default(false);
            $table->date('created');
            $table->integer('created_by');
            $table->date('updated')->nullable();
            $table->integer('updated_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('group_quote_reservation_package');
    }
}
