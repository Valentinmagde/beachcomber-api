<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ResellerPermissionAccess
 * 
 * @property int $id
 * @property int $user_group_id
 * @property int $market_id
 *
 * @package App\Models
 */
class ResellerPermissionAccess extends Model
{
	protected $table = 'reseller_permission_access';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'user_group_id' => 'int',
		'market_id' => 'int'
	];

	protected $fillable = [
		'user_group_id',
		'market_id'
	];
}
