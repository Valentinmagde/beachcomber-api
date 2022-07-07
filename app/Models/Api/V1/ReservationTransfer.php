<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ReservationTransfer
 * 
 * @property int $reservation_transfer_id
 * @property int $reservation_id
 * @property int $vehicle_type_id
 * @property string $arrival_flight
 * @property string $departure_flight
 * @property Carbon $arrival_date
 * @property Carbon $departure_date
 * @property string $transfer_from
 * @property string $transfer_to
 * @property int $num_vehicle
 * @property int $transfer_tariff_id
 * @property int $transfer_rate_mode_id
 * @property float $adult_rate
 * @property float $child_rate
 * @property string $currency
 * @property int $currency_id
 * @property bool $active
 * @property int $user_id
 * @property string $user_name
 * @property Carbon $reservation_transfer_timestamp
 * @property int $is_supplement
 * @property int $num_supplements
 * @property int|null $dossier_id
 * @property Carbon|null $date_sent
 *
 * @package App\Models
 */
class ReservationTransfer extends Model
{
	protected $table = 'reservation_transfer';
	protected $primaryKey = 'reservation_transfer_id';
	public $timestamps = false;

	protected $casts = [
		'reservation_id' => 'int',
		'vehicle_type_id' => 'int',
		'num_vehicle' => 'int',
		'transfer_tariff_id' => 'int',
		'transfer_rate_mode_id' => 'int',
		'adult_rate' => 'float',
		'child_rate' => 'float',
		'currency_id' => 'int',
		'active' => 'bool',
		'user_id' => 'int',
		'is_supplement' => 'int',
		'num_supplements' => 'int',
		'dossier_id' => 'int'
	];

	protected $dates = [
		'arrival_date',
		'departure_date',
		'reservation_transfer_timestamp',
		'date_sent'
	];

	protected $fillable = [
		'reservation_id',
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
		'user_id',
		'user_name',
		'reservation_transfer_timestamp',
		'is_supplement',
		'num_supplements',
		'dossier_id',
		'date_sent'
	];
}
