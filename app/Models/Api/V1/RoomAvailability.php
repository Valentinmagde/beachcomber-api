<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RoomAvailability
 * 
 * @property int $id
 * @property string $pms_property_code
 * @property int $hotel_id
 * @property string $pms_room_code
 * @property int $room_id
 * @property string|null $htng_unique_id
 * @property Carbon $start
 * @property Carbon $end
 * @property Carbon $updated
 * @property Carbon $created
 * @property int $no_available
 * @property Carbon|null $pms_timestamp
 *
 * @package App\Models
 */
class RoomAvailability extends Model
{
	protected $table = 'room_availability';
	public $timestamps = false;

	protected $casts = [
		'hotel_id' => 'int',
		'room_id' => 'int',
		'no_available' => 'int'
	];

	protected $dates = [
		'start',
		'end',
		'updated',
		'created',
		'pms_timestamp'
	];

	protected $fillable = [
		'pms_property_code',
		'hotel_id',
		'pms_room_code',
		'room_id',
		'htng_unique_id',
		'start',
		'end',
		'updated',
		'created',
		'no_available',
		'pms_timestamp'
	];
}
