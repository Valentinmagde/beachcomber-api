<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomSeasonDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_season_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('room_id')->nullable();
            $table->integer('based_on_id')->default(0);
            $table->integer('year_id')->default(0)->index('year_id');
            $table->integer('room_category_id')->default(0)->index('room_category_id');
            $table->integer('family_for_room_id')->default(0);
            $table->integer('view_id')->default(0);
            $table->integer('hotel_id')->default(0)->index('hotel_id');
            $table->integer('rate_per_id')->default(1)->index('room_per_id');
            $table->integer('tariff_type_id')->default(0);
            $table->string('room_code', 45)->default('');
            $table->text('name');
            $table->text('printed_name');
            $table->tinyInteger('can_book_online')->default(1);
            $table->tinyInteger('adult')->default(0);
            $table->tinyInteger('child')->default(0);
            $table->tinyInteger('teen')->default(0);
            $table->tinyInteger('infant')->default(0);
            $table->tinyInteger('adult_sharing')->default(0);
            $table->tinyInteger('child_sharing')->default(0);
            $table->tinyInteger('teen_sharing')->default(0);
            $table->integer('no_available')->default(0);
            $table->tinyInteger('no_person')->default(0);
            $table->tinyInteger('no_bedroom')->default(0);
            $table->tinyInteger('no_bathroom')->default(0);
            $table->tinyInteger('no_toilets')->default(0);
            $table->smallInteger('surface_area')->default(0);
            $table->tinyInteger('terrace_area')->default(0);
            $table->tinyInteger('is_for_honeymoon')->default(0);
            $table->tinyInteger('is_for_family')->default(0);
            $table->tinyInteger('is_sold_to_mauritian')->default(1);
            $table->tinyInteger('has_club_access')->default(0);
            $table->string('image_path', 100)->default('');
            $table->string('video_path', 100)->default('');
            $table->integer('display_ranking')->default(0);
            $table->date('valid_from')->default('9999-12-31');
            $table->date('valid_to')->default('9999-12-31');
            $table->bigInteger('asterix_id')->default(0);
            $table->integer('site_id')->nullable()->default(0);
            $table->integer('qty')->default(0);
            $table->string('cap_rel', 3)->default('or');
            $table->integer('cap_adult');
            $table->integer('cap_child')->default(1);
            $table->integer('cap_teen')->default(1);
            $table->integer('cap_adult_only')->default(0);
            $table->integer('cap_child_age_id')->default(1);
            $table->integer('cap_teen_age_id')->default(3);
            $table->integer('has_third_person')->default(1);
            $table->integer('has_third_person_child')->default(0);
            $table->integer('is_family_tariff')->default(0);
            $table->integer('display_tariff_as_pax')->default(0);
            $table->tinyInteger('exportable_to_ota')->default(0);
            $table->integer('sort_order')->default(0);
            $table->integer('active')->default(1);
            $table->integer('tariff_category_id')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('room_season_details');
    }
}
