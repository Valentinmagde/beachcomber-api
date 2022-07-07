<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfferParentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offer_parent', function (Blueprint $table) {
            $table->bigIncrements('rm_offer_id');
            $table->date('active_from')->nullable();
            $table->date('active_to')->nullable();
            $table->boolean('active')->unsigned()->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offer_parent');
    }
}
