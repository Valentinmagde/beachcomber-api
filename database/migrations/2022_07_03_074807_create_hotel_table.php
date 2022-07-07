<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel', function (Blueprint $table) {
            $table->integer('hotel_id', true);
            $table->integer('country_id')->default(0)->index('countryID');
            $table->smallInteger('region_id')->default(0);
            $table->smallInteger('rating_id')->default(0);
            $table->text('name');
            $table->text('type');
            $table->text('postal_street');
            $table->text('postal_city');
            $table->string('tel', 25);
            $table->string('fax', 25);
            $table->string('url', 100);
            $table->time('check_in');
            $table->time('check_out');
            $table->string('status', 25)->default('Operational');
            $table->date('valid_from')->default('9999-12-31');
            $table->date('valid_to')->default('9999-12-31');
            $table->text('thumb_image')->nullable();
            $table->text('default_image')->nullable();
            $table->integer('order_id');
            $table->tinyInteger('menu_order_id');
            $table->string('hotel_code', 25)->nullable();
            $table->string('video_code', 25);
            $table->string('pms_property_code', 5)->index('pmsCode');
            $table->char('rm_code', 5)->default('na');
            $table->tinyInteger('has_villa')->default(0);
            $table->tinyInteger('has_golf')->default(0);
            $table->tinyInteger('is_hotel')->default(1);
            $table->tinyInteger('on_wedding_calendar')->default(1);
            $table->text('site_url');
            $table->bigInteger('asterix_id')->default(0);
            $table->string('latitude')->comment('coordinates:latitude for google map');
            $table->string('longitude')->comment('coordinates:longitude for google map');
            $table->text('facebook_url');
            $table->text('googleplus_url');
            $table->text('reviewpro_script_url')->nullable();
            $table->text('doc_logo')->nullable();
            $table->tinyInteger('status_report_order')->nullable();
            $table->tinyInteger('on_status_report')->default(1)->index('OnStatusReport');
            $table->integer('wihp_id')->default(0);
            $table->integer('ratetiger_code')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotel');
    }
}
