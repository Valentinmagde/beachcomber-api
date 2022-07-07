<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class NavigationMenuParent
 * 
 * @property int $parent_id
 * @property string $name
 *
 * @package App\Models
 */
class NavigationMenuParent extends Model
{
	protected $table = 'navigation_menu_parent';
	protected $primaryKey = 'parent_id';
	public $timestamps = false;

	protected $fillable = [
		'name'
	];
}
