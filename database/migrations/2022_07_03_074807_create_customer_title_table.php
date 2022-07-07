<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerTitleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_title', function (Blueprint $table) {
            $table->integer('title_id', true);
            $table->string('title')->default('Mr');
            $table->string('hms_code')->nullable();
            $table->unsignedTinyInteger('gender_id')->default(0)->comment('0 plz select, 1 male, 2 female, 3 unknown');
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
        Schema::dropIfExists('customer_title');
    }
}
