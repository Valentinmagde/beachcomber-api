<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RoomVillaFeaturing
 * 
 * @property int $room_villa_feature_id
 * @property int $hotel_id
 * @property int|null $room_id
 * @property int|null $rank
 * @property Carbon|null $valid_from
 * @property Carbon|null $valid_to
 *
 * @package App\Models
 */
class RoomVillaFeaturing extends Model
{
	protected $table = 'room_villa_featuring';
	protected $primaryKey = 'room_villa_feature_id';
	public $timestamps = false;

	protected $casts = [
		'hotel_id' => 'int',
		'room_id' => 'int',
		'rank' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'hotel_id',
		'room_id',
		'rank',
		'valid_from',
		'valid_to'
	];
}
