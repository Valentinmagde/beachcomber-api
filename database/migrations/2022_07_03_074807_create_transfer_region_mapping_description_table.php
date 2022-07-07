<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransferRegionMappingDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfer_region_mapping_description', function (Blueprint $table) {
            $table->integer('transfer_region_mapping_id', true);
            $table->integer('region_id');
            $table->text('mapping_description');
            $table->date('valid_from')->default('2017-12-31');
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
        Schema::dropIfExists('transfer_region_mapping_description');
    }
}
