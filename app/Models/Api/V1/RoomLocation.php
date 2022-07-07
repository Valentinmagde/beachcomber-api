<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RoomLocation
 * 
 * @property int $room_location_id
 * @property int $room_id
 * @property int $location_id
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class RoomLocation extends Model
{
	protected $table = 'room_location';
	protected $primaryKey = 'room_location_id';
	public $timestamps = false;

	protected $casts = [
		'room_id' => 'int',
		'location_id' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'room_id',
		'location_id',
		'valid_from',
		'valid_to'
	];
}
