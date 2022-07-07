<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RoomDetail
 * 
 * @property int $room_details_id
 * @property int $room_id
 * @property int $adult
 * @property int $child
 * @property int $teen
 * @property int $infant
 * @property int $adult_sharing
 * @property int $child_sharing
 * @property int $teen_sharing
 * @property int $child_min_age
 * @property int $child_max_age
 * @property int $infant_min_age
 * @property int $infant_max_age
 * @property int $teen_min_age
 * @property int $teen_max_age
 * @property int $no_available
 * @property int $no_person
 * @property int $tariff_period_id
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 * @property bool $active
 *
 * @package App\Models
 */
class RoomDetail extends Model
{
	protected $table = 'room_details';
	protected $primaryKey = 'room_details_id';
	public $timestamps = false;

	protected $casts = [
		'room_id' => 'int',
		'adult' => 'int',
		'child' => 'int',
		'teen' => 'int',
		'infant' => 'int',
		'adult_sharing' => 'int',
		'child_sharing' => 'int',
		'teen_sharing' => 'int',
		'child_min_age' => 'int',
		'child_max_age' => 'int',
		'infant_min_age' => 'int',
		'infant_max_age' => 'int',
		'teen_min_age' => 'int',
		'teen_max_age' => 'int',
		'no_available' => 'int',
		'no_person' => 'int',
		'tariff_period_id' => 'int',
		'active' => 'bool'
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
		'adult_sharing',
		'child_sharing',
		'teen_sharing',
		'child_min_age',
		'child_max_age',
		'infant_min_age',
		'infant_max_age',
		'teen_min_age',
		'teen_max_age',
		'no_available',
		'no_person',
		'tariff_period_id',
		'valid_from',
		'valid_to',
		'active'
	];
}
