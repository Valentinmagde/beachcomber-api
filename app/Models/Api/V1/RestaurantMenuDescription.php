<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RestaurantMenuDescription
 * 
 * @property int $restaurant_menu_desc_id
 * @property int|null $restaurant_menu_id
 * @property int|null $language_id
 * @property string|null $description
 *
 * @package App\Models
 */
class RestaurantMenuDescription extends Model
{
	protected $table = 'restaurant_menu_description';
	protected $primaryKey = 'restaurant_menu_desc_id';
	public $timestamps = false;

	protected $casts = [
		'restaurant_menu_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'restaurant_menu_id',
		'language_id',
		'description'
	];
}
