<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RoomExtraFeature
 * 
 * @property int $room_extra_feature_id
 * @property string|null $room_extra_feature
 * @property string $htng_code
 * @property string|null $pms_code
 * @property string|null $hms_code
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class RoomExtraFeature extends Model
{
	protected $table = 'room_extra_feature';
	protected $primaryKey = 'room_extra_feature_id';
	public $timestamps = false;

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'room_extra_feature',
		'htng_code',
		'pms_code',
		'hms_code',
		'valid_from',
		'valid_to'
	];
}
