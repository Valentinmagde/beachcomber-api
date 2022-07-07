<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MealPlanDescriptionCopy
 * 
 * @property int $meal_plan_desc_id
 * @property int $meal_plan_id
 * @property int $language_id
 * @property string $name
 *
 * @package App\Models
 */
class MealPlanDescriptionCopy extends Model
{
	protected $table = 'meal_plan_description_copy';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'meal_plan_desc_id' => 'int',
		'meal_plan_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'meal_plan_desc_id',
		'meal_plan_id',
		'language_id',
		'name'
	];
}
