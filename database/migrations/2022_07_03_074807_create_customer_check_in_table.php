<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerCheckInTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_check_in', function (Blueprint $table) {
            $table->integer('customer_ci_id', true);
            $table->string('resa_no', 100)->nullable();
            $table->string('first_name', 100)->nullable();
            $table->string('last_name', 100)->nullable();
            $table->string('room_no', 100)->nullable();
            $table->string('address', 200)->nullable();
            $table->string('city', 100)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('country', 100)->nullable();
            $table->string('tel', 100)->nullable();
            $table->string('mobile', 100)->nullable();
            $table->string('code_postal', 100)->nullable();
            $table->string('fax', 100)->nullable();
            $table->string('nationality', 100)->nullable();
            $table->string('passport_no', 100)->nullable();
            $table->string('dob', 100)->nullable();
            $table->string('profession', 100)->nullable();
            $table->string('addult', 100)->nullable();
            $table->string('child', 100)->nullable();
            $table->string('arr_date', 100)->nullable();
            $table->string('dep_date', 100)->nullable();
            $table->string('travel_partners', 100)->nullable();
            $table->text('comments')->nullable();
            $table->text('allergy')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_check_in');
    }
}
