<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelNavigationTab
 * 
 * @property int $hotel_navigation_tab_id
 * @property int $menu_item_id
 * @property int $hotel_navigation_menu_id
 * @property int $tab_item_rank
 * @property int $hotel_id
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class HotelNavigationTab extends Model
{
	protected $table = 'hotel_navigation_tab';
	protected $primaryKey = 'hotel_navigation_tab_id';
	public $timestamps = false;

	protected $casts = [
		'menu_item_id' => 'int',
		'hotel_navigation_menu_id' => 'int',
		'tab_item_rank' => 'int',
		'hotel_id' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'menu_item_id',
		'hotel_navigation_menu_id',
		'tab_item_rank',
		'hotel_id',
		'valid_from',
		'valid_to'
	];
}
