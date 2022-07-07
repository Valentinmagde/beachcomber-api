<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ReservationDetailsMeal
 * 
 * @property int $reservation_details_meal_id
 * @property int $reservation_id
 * @property int $reservation_details_id
 * @property int $package_id
 * @property int $hotel_package_id
 * @property string $package_title
 * @property string $package_main
 * @property string $package_name
 * @property int $adult
 * @property int $child
 * @property int $teen
 * @property int $infant
 * @property float $adult_rate
 * @property float $child_rate
 * @property float $teen_rate
 * @property float $total
 * @property float $discounted_adult_rate
 * @property float $discounted_teen_rate
 * @property float $discounted_child_rate
 * @property float $discounted_total
 * @property string $currency
 * @property int $currency_id
 * @property int $rate_multiplier
 * @property int $active
 * @property Carbon $reservation_details_meal_timestamp
 * @property int $user_id
 * @property string $user_name
 *
 * @package App\Models
 */
class ReservationDetailsMeal extends Model
{
	protected $table = 'reservation_details_meal';
	protected $primaryKey = 'reservation_details_meal_id';
	public $timestamps = false;

	protected $casts = [
		'reservation_id' => 'int',
		'reservation_details_id' => 'int',
		'package_id' => 'int',
		'hotel_package_id' => 'int',
		'adult' => 'int',
		'child' => 'int',
		'teen' => 'int',
		'infant' => 'int',
		'adult_rate' => 'float',
		'child_rate' => 'float',
		'teen_rate' => 'float',
		'total' => 'float',
		'discounted_adult_rate' => 'float',
		'discounted_teen_rate' => 'float',
		'discounted_child_rate' => 'float',
		'discounted_total' => 'float',
		'currency_id' => 'int',
		'rate_multiplier' => 'int',
		'active' => 'int',
		'user_id' => 'int'
	];

	protected $dates = [
		'reservation_details_meal_timestamp'
	];

	protected $fillable = [
		'reservation_id',
		'reservation_details_id',
		'package_id',
		'hotel_package_id',
		'package_title',
		'package_main',
		'package_name',
		'adult',
		'child',
		'teen',
		'infant',
		'adult_rate',
		'child_rate',
		'teen_rate',
		'total',
		'discounted_adult_rate',
		'discounted_teen_rate',
		'discounted_child_rate',
		'discounted_total',
		'currency',
		'currency_id',
		'rate_multiplier',
		'active',
		'reservation_details_meal_timestamp',
		'user_id',
		'user_name'
	];
}
