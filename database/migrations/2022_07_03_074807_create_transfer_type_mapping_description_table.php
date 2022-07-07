<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransferTypeMappingDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfer_type_mapping_description', function (Blueprint $table) {
            $table->integer('transfer_type_mapping_id', true);
            $table->integer('transfer_type_id');
            $table->text('transfer_mapping_name');
            $table->text('vehicle_mapping_name');
            $table->unsignedBigInteger('mtco_transfer_type_id')->default(0);
            $table->unsignedBigInteger('mtco_vehicle_type_id')->default(0);
            $table->date('valid_from')->default('9999-12-31');
            $table->date('valid_to')->default('9999-12-31');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transfer_type_mapping_description');
    }
}
