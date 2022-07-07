<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationDetailsMealTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_details_meal', function (Blueprint $table) {
            $table->bigIncrements('reservation_details_meal_id');
            $table->bigInteger('reservation_id')->default(0)->index('resaIDIDX');
            $table->bigInteger('reservation_details_id')->default(0);
            $table->unsignedInteger('package_id')->default(0);
            $table->unsignedInteger('hotel_package_id')->default(0);
            $table->string('package_title')->default('na');
            $table->string('package_main')->default('na');
            $table->string('package_name')->default('na');
            $table->unsignedTinyInteger('adult')->default(0);
            $table->tinyInteger('child')->default(0);
            $table->tinyInteger('teen')->default(0);
            $table->tinyInteger('infant')->default(0);
            $table->decimal('adult_rate', 10)->default(0);
            $table->decimal('child_rate', 10)->default(0);
            $table->decimal('teen_rate', 10)->default(0);
            $table->decimal('total', 10)->default(0);
            $table->decimal('discounted_adult_rate', 10)->default(0);
            $table->decimal('discounted_teen_rate', 10)->default(0);
            $table->decimal('discounted_child_rate', 10)->default(0);
            $table->decimal('discounted_total', 10)->default(0);
            $table->char('currency', 5)->default('EUR');
            $table->tinyInteger('currency_id')->default(0);
            $table->tinyInteger('rate_multiplier')->default(0);
            $table->tinyInteger('active')->default(1);
            $table->timestamp('reservation_details_meal_timestamp')->useCurrent();
            $table->unsignedInteger('user_id')->default(0);
            $table->string('user_name')->default('Auto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservation_details_meal');
    }
}
