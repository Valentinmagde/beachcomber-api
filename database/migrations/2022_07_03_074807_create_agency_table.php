<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgencyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agency', function (Blueprint $table) {
            $table->integer('agency_id', true)->comment('auto increment field');
            $table->integer('agency_type_id')->default(0);
            $table->integer('country_id')->default(0)->index('country_agency_fk')->comment('linked to country table');
            $table->string('region')->default('na');
            $table->string('city')->default('na');
            $table->integer('region_id')->default(0);
            $table->integer('city_id')->default(0);
            $table->string('name')->default('na')->index('name')->comment('name of agency');
            $table->string('tel')->default('na')->comment('telephone of agency');
            $table->string('fax')->default('na')->comment('fax of agency');
            $table->string('email')->default('na')->comment('email of agency');
            $table->text('address')->comment('address of agency');
            $table->string('website')->default('na')->comment('website of agency');
            $table->string('vat_number', 50)->default('na');
            $table->string('brn', 50)->default('na');
            $table->unsignedTinyInteger('payment_mode_id')->default(0);
            $table->string('payment_mode', 20)->default('na');
            $table->integer('representative_id')->default(0);
            $table->string('representative')->default('na');
            $table->string('contact_person')->default('na');
            $table->integer('reference_agency_id')->default(59);
            $table->boolean('is_reference')->default(false);
            $table->string('pms_agency_id', 50)->default('');
            $table->string('hms_agency_id', 50)->default('');
            $table->text('notes')->nullable();
            $table->tinyInteger('active')->default(1)->comment('1 for active,0 for deleted');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agency');
    }
}
