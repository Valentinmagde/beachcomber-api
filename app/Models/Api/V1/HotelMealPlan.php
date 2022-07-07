<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelMealPlan
 * 
 * @property int $hotel_meal_plan_id
 * @property int|null $hotel_id
 * @property int|null $meal_plan_id
 * @property bool|null $is_default
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class HotelMealPlan extends Model
{
	protected $table = 'hotel_meal_plan';
	protected $primaryKey = 'hotel_meal_plan_id';
	public $timestamps = false;

	protected $casts = [
		'hotel_id' => 'int',
		'meal_plan_id' => 'int',
		'is_default' => 'bool'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'hotel_id',
		'meal_plan_id',
		'is_default',
		'valid_from',
		'valid_to'
	];
}
