<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RoomAllotmentConditionsUnit
 * 
 * @property int $id
 * @property int|null $id_condition
 * @property int|null $id_room
 * @property int|null $active
 *
 * @package App\Models
 */
class RoomAllotmentConditionsUnit extends Model
{
	protected $table = 'room_allotment_conditions_units';
	public $timestamps = false;

	protected $casts = [
		'id_condition' => 'int',
		'id_room' => 'int',
		'active' => 'int'
	];

	protected $fillable = [
		'id_condition',
		'id_room',
		'active'
	];
}
