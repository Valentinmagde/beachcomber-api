<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ReservationExtra
 * 
 * @property int $reservation_extra_id
 * @property int $reservation_id
 * @property int $service_id
 * @property string $service
 * @property Carbon|null $date_from
 * @property Carbon|null $date_to
 * @property string $remarks
 * @property string $description
 * @property string $tariff_type
 * @property int $tariff_type_id
 * @property float $adult_rate
 * @property float $child_rate
 * @property int $num_adult
 * @property int $num_child
 * @property string|null $child_age
 * @property string|null $infant_age
 * @property int $num_nights
 * @property float $total
 * @property int $adult_qty
 * @property int $child_qty
 * @property float $adult_total
 * @property float $child_total
 * @property string $currency
 * @property int $currency_id
 * @property int $is_package
 * @property int $active
 * @property int $user_id
 * @property string $user_name
 * @property Carbon $reservation_extra_timestamp
 *
 * @package App\Models
 */
class ReservationExtra extends Model
{
	protected $table = 'reservation_extra';
	protected $primaryKey = 'reservation_extra_id';
	public $timestamps = false;

	protected $casts = [
		'reservation_id' => 'int',
		'service_id' => 'int',
		'tariff_type_id' => 'int',
		'adult_rate' => 'float',
		'child_rate' => 'float',
		'num_adult' => 'int',
		'num_child' => 'int',
		'num_nights' => 'int',
		'total' => 'float',
		'adult_qty' => 'int',
		'child_qty' => 'int',
		'adult_total' => 'float',
		'child_total' => 'float',
		'currency_id' => 'int',
		'is_package' => 'int',
		'active' => 'int',
		'user_id' => 'int'
	];

	protected $dates = [
		'date_from',
		'date_to',
		'reservation_extra_timestamp'
	];

	protected $fillable = [
		'reservation_id',
		'service_id',
		'service',
		'date_from',
		'date_to',
		'remarks',
		'description',
		'tariff_type',
		'tariff_type_id',
		'adult_rate',
		'child_rate',
		'num_adult',
		'num_child',
		'child_age',
		'infant_age',
		'num_nights',
		'total',
		'adult_qty',
		'child_qty',
		'adult_total',
		'child_total',
		'currency',
		'currency_id',
		'is_package',
		'active',
		'user_id',
		'user_name',
		'reservation_extra_timestamp'
	];
}
