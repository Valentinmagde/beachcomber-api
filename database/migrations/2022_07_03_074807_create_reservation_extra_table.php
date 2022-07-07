<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationExtraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_extra', function (Blueprint $table) {
            $table->bigInteger('reservation_extra_id', true);
            $table->bigInteger('reservation_id')->default(0);
            $table->integer('service_id')->default(0);
            $table->string('service')->default('NA');
            $table->date('date_from')->nullable();
            $table->date('date_to')->nullable();
            $table->text('remarks');
            $table->text('description');
            $table->string('tariff_type', 25)->default('NA');
            $table->integer('tariff_type_id')->default(0);
            $table->decimal('adult_rate')->default(0);
            $table->decimal('child_rate')->default(0);
            $table->integer('num_adult')->default(0);
            $table->integer('num_child')->default(0);
            $table->string('child_age')->nullable();
            $table->string('infant_age')->nullable();
            $table->integer('num_nights')->default(0);
            $table->decimal('total')->default(0);
            $table->integer('adult_qty')->default(0);
            $table->integer('child_qty')->default(0);
            $table->decimal('adult_total')->default(0);
            $table->decimal('child_total')->default(0);
            $table->string('currency', 5)->default('NA');
            $table->tinyInteger('currency_id')->default(0);
            $table->tinyInteger('is_package')->default(0);
            $table->tinyInteger('active')->default(1);
            $table->unsignedTinyInteger('user_id')->default(0);
            $table->string('user_name')->default('Auto');
            $table->timestamp('reservation_extra_timestamp')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservation_extra');
    }
}
