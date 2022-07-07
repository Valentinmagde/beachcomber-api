<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CuisineTypeRestaurant
 * 
 * @property int $cuisine_type_restaurant_id
 * @property int $cuisine_type_id
 * @property int $restaurant_id
 * @property int|null $type_restaurant_active
 *
 * @package App\Models
 */
class CuisineTypeRestaurant extends Model
{
	protected $table = 'cuisine_type_restaurant';
	protected $primaryKey = 'cuisine_type_restaurant_id';
	public $timestamps = false;

	protected $casts = [
		'cuisine_type_id' => 'int',
		'restaurant_id' => 'int',
		'type_restaurant_active' => 'int'
	];

	protected $fillable = [
		'cuisine_type_id',
		'restaurant_id',
		'type_restaurant_active'
	];
}
