<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RoomAllotmentBackup
 * 
 * @property int $id
 * @property int|null $hotel_id
 * @property int|null $room_id
 * @property string|null $previous_action_type
 * @property string|null $action_type
 * @property Carbon|null $date_from
 * @property Carbon|null $date_to
 * @property int|null $close_for
 * @property string|null $created_by
 * @property int|null $user_id
 * @property int|null $active
 * @property Carbon $allotment_timestamp
 *
 * @package App\Models
 */
class RoomAllotmentBackup extends Model
{
	protected $table = 'room_allotment_backup';
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
		'allotment_timestamp'
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
		'allotment_timestamp'
	];
}
