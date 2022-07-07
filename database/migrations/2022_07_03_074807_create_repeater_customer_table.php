<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepeaterCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repeater_customer', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('pms_customer_id');
            $table->string('email', 256);
            $table->text('title')->nullable();
            $table->text('first_name')->nullable();
            $table->text('last_name')->nullable();
            $table->integer('number_of_stays')->nullable();
            $table->integer('room_number')->nullable();
            $table->text('language')->nullable();
            $table->integer('residence_id')->nullable();
            $table->integer('country_id')->nullable();
            $table->integer('segment')->nullable();
            $table->integer('company_id')->nullable();
            $table->date('arrival_date')->nullable();
            $table->date('departure_date')->nullable();
            $table->timestamp('processed')->nullable();
            $table->string('opt_in', 20)->default('NO');
            $table->timestamp('created')->useCurrent();

            $table->unique(['id'], 'id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('repeater_customer');
    }
}
