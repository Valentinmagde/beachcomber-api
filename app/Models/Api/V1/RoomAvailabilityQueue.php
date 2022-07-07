<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RoomAvailabilityQueue
 * 
 * @property int $id
 * @property string $pms_property_code
 * @property string $pms_room_code
 * @property string|null $htng_unique_id
 * @property Carbon $start
 * @property Carbon $end
 * @property Carbon|null $pms_timestamp
 * @property Carbon $created
 * @property int $no_available
 * @property bool $is_exported
 * @property bool|null $skip
 * @property string|null $log_text
 * @property string|null $pms_timestamp_string
 *
 * @package App\Models
 */
class RoomAvailabilityQueue extends Model
{
	protected $table = 'room_availability_queue';
	public $timestamps = false;

	protected $casts = [
		'no_available' => 'int',
		'is_exported' => 'bool',
		'skip' => 'bool'
	];

	protected $dates = [
		'start',
		'end',
		'pms_timestamp',
		'created'
	];

	protected $fillable = [
		'pms_property_code',
		'pms_room_code',
		'htng_unique_id',
		'start',
		'end',
		'pms_timestamp',
		'created',
		'no_available',
		'is_exported',
		'skip',
		'log_text',
		'pms_timestamp_string'
	];
}
