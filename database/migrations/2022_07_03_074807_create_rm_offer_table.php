<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRmOfferTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rm_offer', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('offer_cat_id');
            $table->integer('offer_cat2_id');
            $table->integer('year_id')->index('year_id_2');
            $table->integer('offer_type_id');
            $table->string('offer_type_name', 20);
            $table->string('name');
            $table->string('printed_name');
            $table->text('description');
            $table->integer('currency_id');
            $table->decimal('numeric_offer', 10, 0)->nullable();
            $table->integer('combinable_all');
            $table->integer('hotel_id');
            $table->date('hotel_date');
            $table->integer('market_id');
            $table->integer('country_id');
            $table->date('country_date');
            $table->integer('reseller_id');
            $table->date('reseller_date');
            $table->date('date_issued')->nullable();
            $table->integer('active')->default(1)->index('active_2');

            $table->index(['active'], 'active');
            $table->index(['id', 'year_id', 'active'], 'id');
            $table->index(['year_id'], 'year_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rm_offer');
    }
}
