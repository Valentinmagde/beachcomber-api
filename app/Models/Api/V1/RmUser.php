<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RmUser
 * 
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $firstname
 * @property string $lastname
 * @property string $permission
 * @property string $admin_permissions
 * @property int $active
 *
 * @package App\Models
 */
class RmUser extends Model
{
	protected $table = 'rm_user';
	public $timestamps = false;

	protected $casts = [
		'active' => 'int'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'username',
		'password',
		'firstname',
		'lastname',
		'permission',
		'admin_permissions',
		'active'
	];
}
