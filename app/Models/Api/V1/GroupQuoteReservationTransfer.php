<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class GroupQuoteReservationTransfer
 * 
 * @property float $group_reservation_transfer_id
 * @property float|null $group_reservation_id
 * @property int|null $vehicle_type_id
 * @property string|null $arrival_flight
 * @property string|null $departure_flight
 * @property Carbon|null $arrival_date
 * @property Carbon|null $departure_date
 * @property string|null $transfer_from
 * @property string|null $transfer_to
 * @property int|null $num_vehicle
 * @property float|null $transfer_tariff_id
 * @property float|null $transfer_rate_mode_id
 * @property float|null $adult_rate
 * @property float|null $child_rate
 * @property string|null $currency
 * @property int|null $currency_id
 * @property bool|null $active
 * @property Carbon $group_reservation_transfer_timestamp
 * @property int|null $is_supplement
 * @property int|null $num_supplements
 *
 * @package App\Models
 */
class GroupQuoteReservationTransfer extends Model
{
	protected $table = 'group_quote_reservation_transfer';
	protected $primaryKey = 'group_reservation_transfer_id';
	public $timestamps = false;

	protected $casts = [
		'group_reservation_id' => 'float',
		'vehicle_type_id' => 'int',
		'num_vehicle' => 'int',
		'transfer_tariff_id' => 'float',
		'transfer_rate_mode_id' => 'float',
		'adult_rate' => 'float',
		'child_rate' => 'float',
		'currency_id' => 'int',
		'active' => 'bool',
		'is_supplement' => 'int',
		'num_supplements' => 'int'
	];

	protected $dates = [
		'arrival_date',
		'departure_date',
		'group_reservation_transfer_timestamp'
	];

	protected $fillable = [
		'group_reservation_id',
		'vehicle_type_id',
		'arrival_flight',
		'departure_flight',
		'arrival_date',
		'departure_date',
		'transfer_from',
		'transfer_to',
		'num_vehicle',
		'transfer_tariff_id',
		'transfer_rate_mode_id',
		'adult_rate',
		'child_rate',
		'currency',
		'currency_id',
		'active',
		'group_reservation_transfer_timestamp',
		'is_supplement',
		'num_supplements'
	];
}
