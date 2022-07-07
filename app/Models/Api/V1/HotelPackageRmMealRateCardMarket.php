<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelPackageRmMealRateCardMarket
 * 
 * @property int $id
 * @property int $meal_id
 * @property int $market_id
 * @property Carbon $assigned_date
 * @property Carbon $applicable_from
 * @property Carbon $applicable_to
 *
 * @package App\Models
 */
class HotelPackageRmMealRateCardMarket extends Model
{
	protected $table = 'hotel_package_rm_meal_rate_card_market';
	public $timestamps = false;

	protected $casts = [
		'meal_id' => 'int',
		'market_id' => 'int'
	];

	protected $dates = [
		'assigned_date',
		'applicable_from',
		'applicable_to'
	];

	protected $fillable = [
		'meal_id',
		'market_id',
		'assigned_date',
		'applicable_from',
		'applicable_to'
	];
}
