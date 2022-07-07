<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RestaurantDressType
 * 
 * @property int $restaurant_dress_type_id
 * @property string $dress_type
 * @property int|null $dress_type_active
 *
 * @package App\Models
 */
class RestaurantDressType extends Model
{
	protected $table = 'restaurant_dress_type';
	protected $primaryKey = 'restaurant_dress_type_id';
	public $timestamps = false;

	protected $casts = [
		'dress_type_active' => 'int'
	];

	protected $fillable = [
		'dress_type',
		'dress_type_active'
	];
}
