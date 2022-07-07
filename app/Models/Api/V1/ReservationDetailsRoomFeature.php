<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ReservationDetailsRoomFeature
 * 
 * @property int $reservation_details_room_feature_id
 * @property int $reservation_id
 * @property int $reservation_details_id
 * @property int $room_extra_feature_id
 * @property int $active
 * @property int $user_id
 * @property string $user_name
 * @property Carbon $reservation_details_room_feature_timestamp
 *
 * @package App\Models
 */
class ReservationDetailsRoomFeature extends Model
{
	protected $table = 'reservation_details_room_feature';
	protected $primaryKey = 'reservation_details_room_feature_id';
	public $timestamps = false;

	protected $casts = [
		'reservation_id' => 'int',
		'reservation_details_id' => 'int',
		'room_extra_feature_id' => 'int',
		'active' => 'int',
		'user_id' => 'int'
	];

	protected $dates = [
		'reservation_details_room_feature_timestamp'
	];

	protected $fillable = [
		'reservation_id',
		'reservation_details_id',
		'room_extra_feature_id',
		'active',
		'user_id',
		'user_name',
		'reservation_details_room_feature_timestamp'
	];
}
