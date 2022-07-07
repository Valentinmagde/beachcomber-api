<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room', function (Blueprint $table) {
            $table->integer('room_id', true);
            $table->unsignedInteger('based_on_id');
            $table->integer('room_category_id')->default(0);
            $table->integer('view_id')->default(0);
            $table->integer('hotel_id')->default(0)->index('hotelID');
            $table->text('name');
            $table->text('name_alias');
            $table->unsignedTinyInteger('rate_type_id')->default(1);
            $table->tinyInteger('tariff_type_id')->default(1);
            $table->tinyInteger('can_book_online')->default(1);
            $table->tinyInteger('adult')->default(0);
            $table->tinyInteger('child')->default(0);
            $table->tinyInteger('teen')->default(0);
            $table->tinyInteger('infant')->default(0);
            $table->tinyInteger('adult_sharing')->default(0);
            $table->tinyInteger('child_sharing')->default(0);
            $table->tinyInteger('teen_sharing')->default(0);
            $table->tinyInteger('child_min_age')->default(5);
            $table->tinyInteger('child_max_age')->default(17);
            $table->tinyInteger('infant_min_age')->default(0);
            $table->tinyInteger('infant_max_age')->default(5);
            $table->tinyInteger('teen_min_age')->default(0);
            $table->tinyInteger('teen_max_age')->default(0);
            $table->integer('no_available')->default(0);
            $table->tinyInteger('no_person')->default(0);
            $table->tinyInteger('no_bedroom')->default(0);
            $table->tinyInteger('no_bathroom')->default(0);
            $table->tinyInteger('no_toilets')->default(0);
            $table->smallInteger('surface_area')->default(0);
            $table->tinyInteger('terrace_area')->default(0);
            $table->tinyInteger('is_for_honeymoon')->default(0);
            $table->tinyInteger('is_featured')->default(0);
            $table->tinyInteger('is_web_exclusive')->default(0);
            $table->tinyInteger('is_for_family')->default(0);
            $table->boolean('is_derived_for_family')->default(false);
            $table->tinyInteger('is_for_golf')->default(0);
            $table->tinyInteger('is_sold_to_mauritian')->default(1);
            $table->tinyInteger('is_available_at_resa')->default(1);
            $table->tinyInteger('has_club_access')->default(0);
            $table->string('image_path', 100)->default('');
            $table->string('video_path', 100)->default('');
            $table->integer('display_ranking')->default(0);
            $table->date('available_from')->default('9999-12-31');
            $table->date('valid_from')->default('9999-12-31');
            $table->date('valid_to')->default('9999-12-31');
            $table->boolean('is_on_sale')->default(false);
            $table->boolean('on_factsheet')->default(false);
            $table->boolean('on_status_report')->default(true);
            $table->boolean('is_virtual')->default(false);
            $table->tinyInteger('is_sold_on_ota')->default(0);
            $table->string('pms_code')->default('na');
            $table->bigInteger('asterix_id')->default(0)->index('asterixID');
            $table->integer('status_ranking');
            $table->integer('report_order')->default(0);
            $table->tinyInteger('tariff_third_person')->default(0);
            $table->unsignedTinyInteger('tariff_show_third_child')->default(0);

            $table->index(['hotel_id', 'pms_code'], 'hotelPMSCodeIDX');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('room');
    }
}
