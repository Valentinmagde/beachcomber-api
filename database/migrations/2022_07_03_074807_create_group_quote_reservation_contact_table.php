<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupQuoteReservationContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_quote_reservation_contact', function (Blueprint $table) {
            $table->integer('quote_reservation_contact_id', true);
            $table->integer('quote_reservation_id');
            $table->integer('contact_id');
            $table->boolean('main_contact')->nullable()->default(false);
            $table->tinyInteger('active')->nullable()->default(1);
            $table->date('created');
            $table->integer('created_by');
            $table->date('updated')->nullable();
            $table->integer('updated_by')->nullable();

            $table->index(['quote_reservation_id', 'contact_id', 'main_contact', 'active'], 'Quote_Reservation_Contact_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('group_quote_reservation_contact');
    }
}
