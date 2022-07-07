<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RestaurantDressDescription
 * 
 * @property int $restaurant_dress_desc_id
 * @property int $restaurant_dress_type_id
 * @property int $language_id
 * @property string $description
 * @property int|null $dress_desc_active
 *
 * @package App\Models
 */
class RestaurantDressDescription extends Model
{
	protected $table = 'restaurant_dress_description';
	protected $primaryKey = 'restaurant_dress_desc_id';
	public $timestamps = false;

	protected $casts = [
		'restaurant_dress_type_id' => 'int',
		'language_id' => 'int',
		'dress_desc_active' => 'int'
	];

	protected $fillable = [
		'restaurant_dress_type_id',
		'language_id',
		'description',
		'dress_desc_active'
	];
}
