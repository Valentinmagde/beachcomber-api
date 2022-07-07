<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RoomAllotmentConditionsValidity
 * 
 * @property int $id
 * @property int|null $id_condition
 * @property Carbon|null $date_from
 * @property Carbon|null $date_to
 * @property int|null $active
 * @property int $no_rooms
 * @property int $booked
 * @property int|null $remaining
 * @property string|null $note
 * @property Carbon|null $return
 *
 * @package App\Models
 */
class RoomAllotmentConditionsValidity extends Model
{
	protected $table = 'room_allotment_conditions_validity';
	public $timestamps = false;

	protected $casts = [
		'id_condition' => 'int',
		'active' => 'int',
		'no_rooms' => 'int',
		'booked' => 'int',
		'remaining' => 'int'
	];

	protected $dates = [
		'date_from',
		'date_to',
		'return'
	];

	protected $fillable = [
		'id_condition',
		'date_from',
		'date_to',
		'active',
		'no_rooms',
		'booked',
		'remaining',
		'note',
		'return'
	];
}
