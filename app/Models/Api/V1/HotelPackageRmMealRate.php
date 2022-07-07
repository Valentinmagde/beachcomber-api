<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelPackageRmMealRate
 * 
 * @property int $id
 * @property int $meal_type_id
 * @property int $depend_on_meal_type_id
 * @property int $inf_rate
 * @property int $child_rate
 * @property int $teen_rate
 * @property int $adult_rate
 * @property int $meal_rate_card_id
 * @property string $name
 * @property Carbon|null $from_date
 * @property Carbon|null $to_date
 * @property int $sort_order
 *
 * @package App\Models
 */
class HotelPackageRmMealRate extends Model
{
	protected $table = 'hotel_package_rm_meal_rate';
	public $timestamps = false;

	protected $casts = [
		'meal_type_id' => 'int',
		'depend_on_meal_type_id' => 'int',
		'inf_rate' => 'int',
		'child_rate' => 'int',
		'teen_rate' => 'int',
		'adult_rate' => 'int',
		'meal_rate_card_id' => 'int',
		'sort_order' => 'int'
	];

	protected $dates = [
		'from_date',
		'to_date'
	];

	protected $fillable = [
		'meal_type_id',
		'depend_on_meal_type_id',
		'inf_rate',
		'child_rate',
		'teen_rate',
		'adult_rate',
		'meal_rate_card_id',
		'name',
		'from_date',
		'to_date',
		'sort_order'
	];
}
