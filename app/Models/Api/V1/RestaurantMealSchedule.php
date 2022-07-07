<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RestaurantMealSchedule
 * 
 * @property int $restaurant_meal_schedule_id
 * @property int $restaurant_meal_type_id
 * @property int $formula_id
 * @property int|null $restaurant_reservation_type_id
 * @property int $restaurant_id
 * @property int $restaurant_dress_type_id
 * @property Carbon $start_time
 * @property Carbon $end_time
 * @property int|null $meal_schedule_active
 *
 * @package App\Models
 */
class RestaurantMealSchedule extends Model
{
	protected $table = 'restaurant_meal_schedule';
	protected $primaryKey = 'restaurant_meal_schedule_id';
	public $timestamps = false;

	protected $casts = [
		'restaurant_meal_type_id' => 'int',
		'formula_id' => 'int',
		'restaurant_reservation_type_id' => 'int',
		'restaurant_id' => 'int',
		'restaurant_dress_type_id' => 'int',
		'meal_schedule_active' => 'int'
	];

	protected $dates = [
		'start_time',
		'end_time'
	];

	protected $fillable = [
		'restaurant_meal_type_id',
		'formula_id',
		'restaurant_reservation_type_id',
		'restaurant_id',
		'restaurant_dress_type_id',
		'start_time',
		'end_time',
		'meal_schedule_active'
	];
}
