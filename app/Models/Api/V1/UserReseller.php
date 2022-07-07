<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserReseller
 * 
 * @property int $user_reseller_id
 * @property int $user_id
 * @property int $reseller_id
 * @property int $active
 *
 * @package App\Models
 */
class UserReseller extends Model
{
	protected $table = 'user_reseller';
	protected $primaryKey = 'user_reseller_id';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'reseller_id' => 'int',
		'active' => 'int'
	];

	protected $fillable = [
		'user_id',
		'reseller_id',
		'active'
	];
}
