<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RestaurantWineDescription
 * 
 * @property int $restaurant_wine_desc_id
 * @property int $restaurant_wine_id
 * @property int $language_id
 * @property string $description
 *
 * @package App\Models
 */
class RestaurantWineDescription extends Model
{
	protected $table = 'restaurant_wine_description';
	protected $primaryKey = 'restaurant_wine_desc_id';
	public $timestamps = false;

	protected $casts = [
		'restaurant_wine_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'restaurant_wine_id',
		'language_id',
		'description'
	];
}
