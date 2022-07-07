<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupQuoteAgencyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_quote_agency', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name', 200);
            $table->smallInteger('type_id');
            $table->string('type', 30);
            $table->smallInteger('country_id');
            $table->smallInteger('language_id');
            $table->smallInteger('currency_id');
            $table->tinyInteger('active')->nullable()->default(1);
            $table->timestamp('created')->useCurrent();
            $table->integer('created_by');
            $table->date('updated')->nullable();
            $table->integer('updated_by')->nullable();

            $table->index(['name', 'type_id', 'country_id', 'language_id', 'active'], 'Quote_Agency_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('group_quote_agency');
    }
}
