<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MealPlan
 * 
 * @property int $meal_plan_id
 * @property string $meal_plan_code
 * @property int $meal_package_id
 * @property int $htng_code
 * @property int $is_derived
 * @property int $on_pms
 * @property Carbon $valid_from
 * @property Carbon|null $valid_to
 *
 * @package App\Models
 */
class MealPlan extends Model
{
	protected $table = 'meal_plan';
	protected $primaryKey = 'meal_plan_id';
	public $timestamps = false;

	protected $casts = [
		'meal_package_id' => 'int',
		'htng_code' => 'int',
		'is_derived' => 'int',
		'on_pms' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'meal_plan_code',
		'meal_package_id',
		'htng_code',
		'is_derived',
		'on_pms',
		'valid_from',
		'valid_to'
	];
}
