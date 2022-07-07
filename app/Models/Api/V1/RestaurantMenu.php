<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RestaurantMenu
 * 
 * @property int $restaurant_menu_id
 * @property int $restaurant_id
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class RestaurantMenu extends Model
{
	protected $table = 'restaurant_menu';
	protected $primaryKey = 'restaurant_menu_id';
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
