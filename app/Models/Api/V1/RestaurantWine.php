<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RestaurantWine
 * 
 * @property int $restaurant_wine_id
 * @property int $restaurant_id
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class RestaurantWine extends Model
{
	protected $table = 'restaurant_wine';
	protected $primaryKey = 'restaurant_wine_id';
	public $timestamps = false;

	protected $casts = [
		'restaurant_id' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'restaurant_id',
		'valid_from',
		'valid_to'
	];
}
