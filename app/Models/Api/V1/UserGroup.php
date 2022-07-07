<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserGroup
 * 
 * @property float $user_group_id
 * @property string $user_group
 * @property int $active
 *
 * @package App\Models
 */
class UserGroup extends Model
{
	protected $table = 'user_group';
	protected $primaryKey = 'user_group_id';
	public $timestamps = false;

	protected $casts = [
		'active' => 'int'
	];

	protected $fillable = [
		'user_group',
		'active'
	];
}
