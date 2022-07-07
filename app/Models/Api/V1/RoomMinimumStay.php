<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RoomMinimumStay
 * 
 * @property int $room_minimum_stay_id
 * @property int $room_id
 * @property int $rm_minimum_stay_id
 * @property int $minimum_stay
 * @property int $policy_for
 * @property int $client_type_id
 * @property string $client_type
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 * @property int $active
 *
 * @package App\Models
 */
class RoomMinimumStay extends Model
{
	protected $table = 'room_minimum_stay';
	protected $primaryKey = 'room_minimum_stay_id';
	public $timestamps = false;

	protected $casts = [
		'room_id' => 'int',
		'rm_minimum_stay_id' => 'int',
		'minimum_stay' => 'int',
		'policy_for' => 'int',
		'client_type_id' => 'int',
		'active' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'room_id',
		'rm_minimum_stay_id',
		'minimum_stay',
		'policy_for',
		'client_type_id',
		'client_type',
		'valid_from',
		'valid_to',
		'active'
	];
}
