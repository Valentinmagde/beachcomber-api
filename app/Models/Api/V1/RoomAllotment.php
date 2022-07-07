<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RoomAllotment
 * 
 * @property int $id
 * @property int $hotel_id
 * @property int $room_id
 * @property string $previous_action_type
 * @property string $action_type
 * @property Carbon $date_from
 * @property Carbon $date_to
 * @property int $close_for
 * @property string $created_by
 * @property int $user_id
 * @property int $active
 * @property Carbon $allotment_timestamp
 * @property Carbon $last_updated
 *
 * @package App\Models
 */
class RoomAllotment extends Model
{
	protected $table = 'room_allotment';
	public $timestamps = false;

	protected $casts = [
		'hotel_id' => 'int',
		'room_id' => 'int',
		'close_for' => 'int',
		'user_id' => 'int',
		'active' => 'int'
	];

	protected $dates = [
		'date_from',
		'date_to',
		'allotment_timestamp',
		'last_updated'
	];

	protected $fillable = [
		'hotel_id',
		'room_id',
		'previous_action_type',
		'action_type',
		'date_from',
		'date_to',
		'close_for',
		'created_by',
		'user_id',
		'active',
		'allotment_timestamp',
		'last_updated'
	];
}
