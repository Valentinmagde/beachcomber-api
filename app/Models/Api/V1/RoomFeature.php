<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RoomFeature
 * 
 * @property int $room_feature_id
 * @property int $room_id
 * @property int $feature_id
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class RoomFeature extends Model
{
	protected $table = 'room_feature';
	protected $primaryKey = 'room_feature_id';
	public $timestamps = false;

	protected $casts = [
		'room_id' => 'int',
		'feature_id' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'room_id',
		'feature_id',
		'valid_from',
		'valid_to'
	];
}
