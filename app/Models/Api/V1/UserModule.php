<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserModule
 * 
 * @property int $user_module_id
 * @property int $user_module_system_id
 * @property int $user_module_parent_id
 * @property string $module_name
 * @property string $module_alias
 * @property string $module_link
 * @property string $module_type
 * @property string $module_controller
 * @property string $module_action
 * @property string $module_icon
 * @property int $is_crs_module
 * @property int|null $sort_order
 * @property int $active
 *
 * @package App\Models
 */
class UserModule extends Model
{
	protected $table = 'user_module';
	protected $primaryKey = 'user_module_id';
	public $timestamps = false;

	protected $casts = [
		'user_module_system_id' => 'int',
		'user_module_parent_id' => 'int',
		'is_crs_module' => 'int',
		'sort_order' => 'int',
		'active' => 'int'
	];

	protected $fillable = [
		'user_module_system_id',
		'user_module_parent_id',
		'module_name',
		'module_alias',
		'module_link',
		'module_type',
		'module_controller',
		'module_action',
		'module_icon',
		'is_crs_module',
		'sort_order',
		'active'
	];
}
