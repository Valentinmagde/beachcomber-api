<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactReasonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_reason', function (Blueprint $table) {
            $table->integer('contact_reason_id', true);
            $table->text('contact_reason_name')->nullable();
            $table->integer('constant_id')->nullable();
            $table->text('email')->nullable();
            $table->date('valid_from')->nullable()->default('9999-12-31');
            $table->date('valid_to')->nullable()->default('9999-12-31');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact_reason');
    }
}
