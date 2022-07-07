<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RoomCapacity
 * 
 * @property int $room_capacity_id
 * @property int $room_id
 * @property int $adult
 * @property int $child
 * @property int $teen
 * @property int $infant
 * @property int $tariff_period_id
 * @property int $active
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class RoomCapacity extends Model
{
	protected $table = 'room_capacity';
	protected $primaryKey = 'room_capacity_id';
	public $timestamps = false;

	protected $casts = [
		'room_id' => 'int',
		'adult' => 'int',
		'child' => 'int',
		'teen' => 'int',
		'infant' => 'int',
		'tariff_period_id' => 'int',
		'active' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'room_id',
		'adult',
		'child',
		'teen',
		'infant',
		'tariff_period_id',
		'active',
		'valid_from',
		'valid_to'
	];
}
