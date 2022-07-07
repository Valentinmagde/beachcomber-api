<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserAccess
 * 
 * @property int $user_access_id
 * @property int $user_access_type_id
 * @property int $user_id
 *
 * @package App\Models
 */
class UserAccess extends Model
{
	protected $table = 'user_access';
	protected $primaryKey = 'user_access_id';
	public $timestamps = false;

	protected $casts = [
		'user_access_type_id' => 'int',
		'user_id' => 'int'
	];

	protected $fillable = [
		'user_access_type_id',
		'user_id'
	];
}
