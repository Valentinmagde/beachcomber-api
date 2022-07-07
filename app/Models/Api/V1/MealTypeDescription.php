<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MealTypeDescription
 * 
 * @property int $meal_type_description_id
 * @property int $meal_type_id
 * @property int $Language_id
 * @property string|null $description
 *
 * @package App\Models
 */
class MealTypeDescription extends Model
{
	protected $table = 'meal_type_description';
	protected $primaryKey = 'meal_type_description_id';
	public $timestamps = false;

	protected $casts = [
		'meal_type_id' => 'int',
		'Language_id' => 'int'
	];

	protected $fillable = [
		'meal_type_id',
		'Language_id',
		'description'
	];
}
