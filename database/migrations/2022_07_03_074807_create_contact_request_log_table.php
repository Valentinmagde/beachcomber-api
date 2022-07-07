<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactRequestLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_request_log', function (Blueprint $table) {
            $table->integer('contact_request_id', true);
            $table->timestamp('contact_request_dateTime')->useCurrent();
            $table->integer('customer_id');
            $table->integer('contact_reason_id');
            $table->string('contact_reason', 50)->nullable();
            $table->integer('contact_hotel_id')->nullable();
            $table->integer('contact_office_id')->nullable();
            $table->text('contact_message')->nullable();
            $table->string('contact_outcome', 200)->nullable();

            $table->unique(['contact_request_dateTime', 'contact_reason_id', 'contact_hotel_id', 'contact_office_id'], 'Contact_Request_log_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact_request_log');
    }
}
