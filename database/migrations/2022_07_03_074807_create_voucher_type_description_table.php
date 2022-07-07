<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoucherTypeDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voucher_type_description', function (Blueprint $table) {
            $table->bigIncrements('ID')->unique('ID');
            $table->integer('Voucher_Type_ID');
            $table->tinyInteger('Language_ID');
            $table->text('description');
            $table->timestamp('created')->useCurrent();
            $table->text('logo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('voucher_type_description');
    }
}
