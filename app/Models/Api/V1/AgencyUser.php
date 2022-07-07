<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AgencyUser
 * 
 * @property int $agency_user_id
 * @property int $agency_id
 * @property int $user_id
 * @property int $active
 *
 * @package App\Models
 */
class AgencyUser extends Model
{
	protected $table = 'agency_user';
	protected $primaryKey = 'agency_user_id';
	public $timestamps = false;

	protected $casts = [
		'agency_id' => 'int',
		'user_id' => 'int',
		'active' => 'int'
	];

	protected $fillable = [
		'agency_id',
		'user_id',
		'active'
	];
}
