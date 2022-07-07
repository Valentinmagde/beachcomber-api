<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ReservationHmsMigration
 * 
 * @property int $id
 * @property Carbon|null $ArrivalDate
 * @property Carbon|null $DepartureDate
 * @property float|null $AverageRate
 * @property string|null $ConfirmationNumber
 * @property string $StarlightReference
 * @property string|null $HMSReference
 * @property string|null $ReservedRoomType
 * @property string|null $Nationality
 * @property string|null $LastName
 * @property string|null $FirstName
 * @property int|null $Adults
 * @property int|null $Teen
 * @property int|null $C4
 * @property int|null $C3
 * @property int|null $C2
 * @property int|null $C1
 * @property string|null $MealPlan
 * @property string|null $GuestCurrency
 * @property string|null $RatePlan
 * @property string|null $Group
 * @property string|null $Status
 * @property string|null $PrimaryBookingAgency
 * @property string|null $SecondaryBookingAgency
 * @property string|null $GuestArrivalTime
 * @property string|null $GuestDepartureTime
 * @property string|null $MarketSegment
 * @property float|null $DepositAmount
 * @property string|null $OriginatingSystem
 * @property float|null $Balance
 * @property float|null $TotalRateinMUR
 * @property float|null $RateGrandTotalinFC
 * @property string|null $GroupName
 * @property string|null $SourceofBusiness
 * @property string|null $CRSReservationNumber
 * @property int|null $QTYRoom
 * @property string|null $TransactionKey
 * @property Carbon $created
 * @property float|null $OriginalDepositAmount
 *
 * @package App\Models
 */
class ReservationHmsMigration extends Model
{
	protected $table = 'reservation_hms_migration';
	public $timestamps = false;

	protected $casts = [
		'AverageRate' => 'float',
		'Adults' => 'int',
		'Teen' => 'int',
		'C4' => 'int',
		'C3' => 'int',
		'C2' => 'int',
		'C1' => 'int',
		'DepositAmount' => 'float',
		'Balance' => 'float',
		'TotalRateinMUR' => 'float',
		'RateGrandTotalinFC' => 'float',
		'QTYRoom' => 'int',
		'OriginalDepositAmount' => 'float'
	];

	protected $dates = [
		'ArrivalDate',
		'DepartureDate',
		'created'
	];

	protected $fillable = [
		'ArrivalDate',
		'DepartureDate',
		'AverageRate',
		'ConfirmationNumber',
		'StarlightReference',
		'HMSReference',
		'ReservedRoomType',
		'Nationality',
		'LastName',
		'FirstName',
		'Adults',
		'Teen',
		'C4',
		'C3',
		'C2',
		'C1',
		'MealPlan',
		'GuestCurrency',
		'RatePlan',
		'Group',
		'Status',
		'PrimaryBookingAgency',
		'SecondaryBookingAgency',
		'GuestArrivalTime',
		'GuestDepartureTime',
		'MarketSegment',
		'DepositAmount',
		'OriginatingSystem',
		'Balance',
		'TotalRateinMUR',
		'RateGrandTotalinFC',
		'GroupName',
		'SourceofBusiness',
		'CRSReservationNumber',
		'QTYRoom',
		'TransactionKey',
		'created',
		'OriginalDepositAmount'
	];
}
