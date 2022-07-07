<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RoomAmenity
 * 
 * @property int $room_amenity_id
 * @property int $room_id
 * @property int $amenity_sub_type_id
 * @property int $amenity_id
 * @property int $value
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class RoomAmenity extends Model
{
	protected $table = 'room_amenity';
	protected $primaryKey = 'room_amenity_id';
	public $timestamps = false;

	protected $casts = [
		'room_id' => 'int',
		'amenity_sub_type_id' => 'int',
		'amenity_id' => 'int',
		'value' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'room_id',
		'amenity_sub_type_id',
		'amenity_id',
		'value',
		'valid_from',
		'valid_to'
	];
}
