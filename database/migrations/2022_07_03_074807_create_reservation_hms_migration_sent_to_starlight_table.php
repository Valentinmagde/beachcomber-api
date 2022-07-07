<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationHmsMigrationSentToStarlightTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_hms_migration_sent_to_starlight', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('ArrivalDate')->nullable()->default('9999-12-31');
            $table->date('DepartureDate')->nullable()->default('9999-12-31');
            $table->decimal('AverageRate')->nullable()->default(0);
            $table->string('ConfirmationNumber')->nullable();
            $table->string('StarlightReference');
            $table->string('ReservedRoomType')->nullable();
            $table->char('Nationality', 10)->nullable();
            $table->string('LastName')->nullable();
            $table->string('FirstName')->nullable();
            $table->tinyInteger('Adults')->nullable()->default(0);
            $table->tinyInteger('Teen')->nullable()->default(0);
            $table->tinyInteger('C4')->nullable()->default(0);
            $table->tinyInteger('C3')->nullable()->default(0);
            $table->tinyInteger('C2')->nullable()->default(0);
            $table->tinyInteger('C1')->nullable()->default(0);
            $table->string('MealPlan', 25)->nullable();
            $table->string('GuestCurrency', 4)->nullable();
            $table->string('RatePlan', 15)->nullable();
            $table->string('Group')->nullable();
            $table->string('Status', 25)->nullable();
            $table->string('PrimaryBookingAgency')->nullable();
            $table->string('SecondaryBookingAgency')->nullable();
            $table->string('GuestArrivalTime', 15)->nullable();
            $table->string('GuestDepartureTime', 15)->nullable();
            $table->string('MarketSegment', 25)->nullable();
            $table->decimal('DepositAmount')->nullable()->default(0);
            $table->string('OriginatingSystem', 50)->nullable();
            $table->decimal('Balance')->nullable()->default(0);
            $table->decimal('TotalRateinMUR')->nullable()->default(0);
            $table->decimal('RateGrandTotalinFC')->nullable()->default(0);
            $table->string('GroupName')->nullable();
            $table->string('SourceofBusiness', 50)->nullable();
            $table->string('CRSReservationNumber')->nullable();
            $table->tinyInteger('QTYRoom')->nullable()->default(0);
            $table->string('TransactionKey')->nullable();
            $table->timestamp('created')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservation_hms_migration_sent_to_starlight');
    }
}
