<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserModuleSystem
 * 
 * @property int $user_module_system_id
 * @property string|null $user_module_system
 *
 * @package App\Models
 */
class UserModuleSystem extends Model
{
	protected $table = 'user_module_system';
	protected $primaryKey = 'user_module_system_id';
	public $timestamps = false;

	protected $fillable = [
		'user_module_system'
	];
}
