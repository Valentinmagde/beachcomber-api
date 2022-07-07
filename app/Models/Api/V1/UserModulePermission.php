<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserModulePermission
 * 
 * @property int $user_module_permission_id
 * @property int $user_group_id
 * @property int $user_module_id
 * @property int $can_access
 * @property int $can_read
 * @property int $can_write
 * @property int $active
 *
 * @package App\Models
 */
class UserModulePermission extends Model
{
	protected $table = 'user_module_permission';
	protected $primaryKey = 'user_module_permission_id';
	public $timestamps = false;

	protected $casts = [
		'user_group_id' => 'int',
		'user_module_id' => 'int',
		'can_access' => 'int',
		'can_read' => 'int',
		'can_write' => 'int',
		'active' => 'int'
	];

	protected $fillable = [
		'user_group_id',
		'user_module_id',
		'can_access',
		'can_read',
		'can_write',
		'active'
	];
}
