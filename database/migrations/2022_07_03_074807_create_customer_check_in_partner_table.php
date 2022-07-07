<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerCheckInPartnerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_check_in_partner', function (Blueprint $table) {
            $table->integer('customer_ci_partner_id', true);
            $table->string('resa_no', 100)->nullable();
            $table->string('first_name', 100)->nullable();
            $table->string('last_name', 100)->nullable();
            $table->string('nationality', 100)->nullable();
            $table->string('passport_no', 100)->nullable();
            $table->string('dob', 100)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('allergy', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_check_in_partner');
    }
}
