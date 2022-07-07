<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RestaurantMealDescription
 * 
 * @property int $restaurant_meal_desc_id
 * @property int $restaurant_meal_type_id
 * @property int $language_id
 * @property string $description
 * @property int|null $meal_desc_active
 *
 * @package App\Models
 */
class RestaurantMealDescription extends Model
{
	protected $table = 'restaurant_meal_description';
	protected $primaryKey = 'restaurant_meal_desc_id';
	public $timestamps = false;

	protected $casts = [
		'restaurant_meal_type_id' => 'int',
		'language_id' => 'int',
		'meal_desc_active' => 'int'
	];

	protected $fillable = [
		'restaurant_meal_type_id',
		'language_id',
		'description',
		'meal_desc_active'
	];
}
