<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignOfficeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foreign_office', function (Blueprint $table) {
            $table->integer('foreign_office_id', true);
            $table->string('foreign_office_name', 50)->default('');
            $table->string('foreign_office_email', 50)->default('');
            $table->string('foreign_office_phone', 30)->default('');
            $table->string('foreign_office_fax', 30)->default('');
            $table->string('foreign_office_address', 100)->default('');
            $table->string('foreign_office_countries_resposible', 50)->default('');
            $table->integer('foreign_office_countries_type')->default(0);
            $table->string('foreign_office_countries_description', 200)->default('');
            $table->string('to_name', 70)->default('');
            $table->string('press_name', 70)->default('');
            $table->string('grp_name', 70)->default('');
            $table->string('event_name', 70)->default('');
            $table->string('agv_name', 70)->default('');
            $table->string('to_phone', 30)->default('0');
            $table->string('press_phone', 30)->default('0');
            $table->string('grp_phone', 30)->default('0');
            $table->string('event_phone', 30)->default('0');
            $table->string('agv_phone', 30)->default('0');
            $table->string('to_mail', 50)->default('');
            $table->string('press_mail', 50)->default('');
            $table->string('grp_mail', 50)->default('');
            $table->string('event_mail', 50)->default('');
            $table->string('agv_mail', 50)->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foreign_office');
    }
}
