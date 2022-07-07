<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelNavigationMenu
 * 
 * @property int $hotel_navigation_menu_id
 * @property int|null $menu_item_id
 * @property int|null $hotel_id
 * @property int $menu_item_rank
 * @property Carbon|null $valid_from
 * @property Carbon|null $valid_to
 *
 * @package App\Models
 */
class HotelNavigationMenu extends Model
{
	protected $table = 'hotel_navigation_menu';
	protected $primaryKey = 'hotel_navigation_menu_id';
	public $timestamps = false;

	protected $casts = [
		'menu_item_id' => 'int',
		'hotel_id' => 'int',
		'menu_item_rank' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'menu_item_id',
		'hotel_id',
		'menu_item_rank',
		'valid_from',
		'valid_to'
	];
}
