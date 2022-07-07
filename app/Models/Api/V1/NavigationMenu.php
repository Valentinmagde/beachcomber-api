<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class NavigationMenu
 * 
 * @property int $menu_item_id
 * @property int $parent_id
 * @property string $menu_item_folder
 * @property string $controller
 * @property int $is_link
 * @property int $in_main_menu
 * @property int $in_stacked_menu
 * @property bool $in_group_factsheet_menu
 * @property bool $in_factsheet_menu
 * @property string|null $link
 * @property string $class
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class NavigationMenu extends Model
{
	protected $table = 'navigation_menu';
	protected $primaryKey = 'menu_item_id';
	public $timestamps = false;

	protected $casts = [
		'parent_id' => 'int',
		'is_link' => 'int',
		'in_main_menu' => 'int',
		'in_stacked_menu' => 'int',
		'in_group_factsheet_menu' => 'bool',
		'in_factsheet_menu' => 'bool'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'parent_id',
		'menu_item_folder',
		'controller',
		'is_link',
		'in_main_menu',
		'in_stacked_menu',
		'in_group_factsheet_menu',
		'in_factsheet_menu',
		'link',
		'class',
		'valid_from',
		'valid_to'
	];
}
