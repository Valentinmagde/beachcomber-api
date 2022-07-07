<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RestaurantDescription
 * 
 * @property int $restaurant_desc_id
 * @property int|null $restaurant_id
 * @property int|null $language_id
 * @property string|null $name
 * @property string|null $short_description
 * @property string|null $cuisine
 * @property Carbon|null $breakfast_start
 * @property Carbon|null $breakfast_end
 * @property Carbon|null $lunch_start
 * @property Carbon|null $lunch_end
 * @property Carbon|null $dinner_start
 * @property Carbon|null $dinner_end
 * @property string|null $location
 * @property string|null $attire
 * @property string|null $reservation
 * @property string|null $description
 * @property bool|null $breakfast
 * @property bool|null $lunch
 * @property bool|null $dinner
 * @property string|null $breakfast_start_period
 * @property string|null $breakfast_end_period
 * @property string|null $lunch_start_period
 * @property string|null $lunch_end_period
 * @property string|null $dinner_start_period
 * @property string|null $dinner_end_period
 * @property bool|null $bar
 * @property string|null $bar_start_period
 * @property string|null $bar_end_period
 * @property Carbon|null $bar_start
 * @property Carbon|null $bar_end
 * @property string|null $breakfast_meal_type
 * @property string|null $lunch_meal_type
 * @property string|null $dinner_meal_type
 * @property bool|null $is_translated
 *
 * @package App\Models
 */
class RestaurantDescription extends Model
{
	protected $table = 'restaurant_description';
	protected $primaryKey = 'restaurant_desc_id';
	public $timestamps = false;

	protected $casts = [
		'restaurant_id' => 'int',
		'language_id' => 'int',
		'breakfast' => 'bool',
		'lunch' => 'bool',
		'dinner' => 'bool',
		'bar' => 'bool',
		'is_translated' => 'bool'
	];

	protected $dates = [
		'breakfast_start',
		'breakfast_end',
		'lunch_start',
		'lunch_end',
		'dinner_start',
		'dinner_end',
		'bar_start',
		'bar_end'
	];

	protected $fillable = [
		'restaurant_id',
		'language_id',
		'name',
		'short_description',
		'cuisine',
		'breakfast_start',
		'breakfast_end',
		'lunch_start',
		'lunch_end',
		'dinner_start',
		'dinner_end',
		'location',
		'attire',
		'reservation',
		'description',
		'breakfast',
		'lunch',
		'dinner',
		'breakfast_start_period',
		'breakfast_end_period',
		'lunch_start_period',
		'lunch_end_period',
		'dinner_start_period',
		'dinner_end_period',
		'bar',
		'bar_start_period',
		'bar_end_period',
		'bar_start',
		'bar_end',
		'breakfast_meal_type',
		'lunch_meal_type',
		'dinner_meal_type',
		'is_translated'
	];
}
