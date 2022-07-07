<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MealPlanDescription
 * 
 * @property int $meal_plan_desc_id
 * @property int $meal_plan_id
 * @property int $language_id
 * @property string $name
 * @property string|null $printed_name
 *
 * @package App\Models
 */
class MealPlanDescription extends Model
{
	protected $table = 'meal_plan_description';
	protected $primaryKey = 'meal_plan_desc_id';
	public $timestamps = false;

	protected $casts = [
		'meal_plan_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'meal_plan_id',
		'language_id',
		'name',
		'printed_name'
	];
}
