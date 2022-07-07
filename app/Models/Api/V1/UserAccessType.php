<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserAccessType
 * 
 * @property int $user_access_type_id
 * @property string $user_access_type
 * @property int $user_module_id
 *
 * @package App\Models
 */
class UserAccessType extends Model
{
	protected $table = 'user_access_type';
	protected $primaryKey = 'user_access_type_id';
	public $timestamps = false;

	protected $casts = [
		'user_module_id' => 'int'
	];

	protected $fillable = [
		'user_access_type',
		'user_module_id'
	];
}
