<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_history', function (Blueprint $table) {
            $table->bigInteger('reservation_history_id', true);
            $table->bigInteger('reservation_id')->default(0)->index('oceandba_reservation_id')->comment('List of quotes');
            $table->text('message')->nullable();
            $table->decimal('accom_total')->default(0);
            $table->decimal('transfer_total')->default(0);
            $table->decimal('meal_total')->default(0);
            $table->decimal('wedding_total')->default(0);
            $table->decimal('extra_total')->default(0);
            $table->decimal('discount_total')->default(0);
            $table->integer('user_id')->default(0);
            $table->tinyInteger('is_sent')->default(0);
            $table->tinyInteger('is_confirmation')->nullable()->default(0);
            $table->timestamp('created_on')->useCurrent();
            $table->tinyInteger('is_read')->default(0);
            $table->dateTime('read_on')->default('9999-12-31 00:00:00');
            $table->tinyInteger('is_followup')->default(0);
            $table->integer('followup_by')->default(0);
            $table->dateTime('followup_on')->default('9999-12-31 00:00:00');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservation_history');
    }
}
