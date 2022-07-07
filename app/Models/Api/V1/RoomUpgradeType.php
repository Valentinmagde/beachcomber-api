<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RoomUpgradeType
 * 
 * @property int $id
 * @property string $description
 * @property int|null $active
 *
 * @package App\Models
 */
class RoomUpgradeType extends Model
{
	protected $table = 'room_upgrade_type';
	public $timestamps = false;

	protected $casts = [
		'active' => 'int'
	];

	protected $fillable = [
		'description',
		'active'
	];
}
