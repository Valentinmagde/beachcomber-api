<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RoomAllotmentStatusLog
 * 
 * @property int $temp_id
 * @property Carbon $temp_date
 * @property int $temp_user
 * @property int $temp_hotel
 * @property int $temp_room
 * @property string|null $temp_data
 * @property Carbon $date_from
 * @property Carbon $date_to
 *
 * @package App\Models
 */
class RoomAllotmentStatusLog extends Model
{
	protected $table = 'room_allotment_status_log';
	protected $primaryKey = 'temp_id';
	public $timestamps = false;

	protected $casts = [
		'temp_user' => 'int',
		'temp_hotel' => 'int',
		'temp_room' => 'int'
	];

	protected $dates = [
		'temp_date',
		'date_from',
		'date_to'
	];

	protected $fillable = [
		'temp_date',
		'temp_user',
		'temp_hotel',
		'temp_room',
		'temp_data',
		'date_from',
		'date_to'
	];
}
