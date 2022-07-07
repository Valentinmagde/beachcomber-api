<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ChefRestaurant
 * 
 * @property int $chef_restaurant_id
 * @property int $chef_id
 * @property int $restaurant_id
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class ChefRestaurant extends Model
{
	protected $table = 'chef_restaurant';
	protected $primaryKey = 'chef_restaurant_id';
	public $timestamps = false;

	protected $casts = [
		'chef_id' => 'int',
		'restaurant_id' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'chef_id',
		'restaurant_id',
		'valid_from',
		'valid_to'
	];
}
