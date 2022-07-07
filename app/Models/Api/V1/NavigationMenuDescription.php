<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class NavigationMenuDescription
 * 
 * @property int $menu_item_desc_id
 * @property int $menu_item_id
 * @property int $language_id
 * @property string $description
 * @property string $alias_description
 *
 * @package App\Models
 */
class NavigationMenuDescription extends Model
{
	protected $table = 'navigation_menu_description';
	protected $primaryKey = 'menu_item_desc_id';
	public $timestamps = false;

	protected $casts = [
		'menu_item_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'menu_item_id',
		'language_id',
		'description',
		'alias_description'
	];
}
