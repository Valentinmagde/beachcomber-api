<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRmSiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rm_site', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('hotel_id')->nullable()->index('hotel_id');
            $table->string('code', 4);
            $table->integer('property_code');
            $table->integer('room_nb')->nullable();
            $table->string('name', 50);
            $table->string('printed_name', 50)->nullable();
            $table->string('address', 100)->nullable();
            $table->string('city', 100)->nullable();
            $table->string('state', 50)->nullable();
            $table->integer('country_id');
            $table->string('pcode', 25)->nullable();
            $table->string('phone', 25)->nullable();
            $table->string('fax', 25)->nullable();
            $table->string('email', 45)->nullable();
            $table->string('url', 100)->nullable();
            $table->integer('currency_id')->nullable();
            $table->integer('ranking')->nullable();
            $table->integer('year_id');
            $table->integer('active')->nullable()->default(1);

            $table->index(['year_id', 'active'], 'year_id');
            $table->index(['hotel_id', 'year_id', 'active'], 'hotel_id_2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rm_site');
    }
}
