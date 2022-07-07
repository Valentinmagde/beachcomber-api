<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RestaurantMealType
 * 
 * @property int $restaurant_meal_type_id
 * @property string $meal_type
 * @property string|null $restaurant_type
 * @property int|null $meal_type_active
 *
 * @package App\Models
 */
class RestaurantMealType extends Model
{
	protected $table = 'restaurant_meal_type';
	protected $primaryKey = 'restaurant_meal_type_id';
	public $timestamps = false;

	protected $casts = [
		'meal_type_active' => 'int'
	];

	protected $fillable = [
		'meal_type',
		'restaurant_type',
		'meal_type_active'
	];
}
