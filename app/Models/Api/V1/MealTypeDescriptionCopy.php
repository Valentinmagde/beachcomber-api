<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MealTypeDescriptionCopy
 * 
 * @property int $meal_type_description_id
 * @property int $meal_type_id
 * @property int $Language_id
 * @property string|null $description
 *
 * @package App\Models
 */
class MealTypeDescriptionCopy extends Model
{
	protected $table = 'meal_type_description_copy';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'meal_type_description_id' => 'int',
		'meal_type_id' => 'int',
		'Language_id' => 'int'
	];

	protected $fillable = [
		'meal_type_description_id',
		'meal_type_id',
		'Language_id',
		'description'
	];
}
