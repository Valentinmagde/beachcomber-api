<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelMealPlanMarketDefault
 * 
 * @property int $hotel_meal_plan_id
 * @property int $hotel_id
 * @property int $hotel_market_id
 * @property int $market_id
 * @property int $meal_plan_id
 * @property int $is_default
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class HotelMealPlanMarketDefault extends Model
{
	protected $table = 'hotel_meal_plan_market_default';
	protected $primaryKey = 'hotel_meal_plan_id';
	public $timestamps = false;

	protected $casts = [
		'hotel_id' => 'int',
		'hotel_market_id' => 'int',
		'market_id' => 'int',
		'meal_plan_id' => 'int',
		'is_default' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'hotel_id',
		'hotel_market_id',
		'market_id',
		'meal_plan_id',
		'is_default',
		'valid_from',
		'valid_to'
	];
}
