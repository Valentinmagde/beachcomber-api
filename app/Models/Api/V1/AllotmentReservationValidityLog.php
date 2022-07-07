<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AllotmentReservationValidityLog
 * 
 * @property int $id
 * @property int|null $allotment_id
 * @property int $allotment_validity_id
 * @property Carbon|null $day
 * @property string|null $note
 * @property Carbon|null $created
 * @property int $reservation_id
 * @property int|null $reservation_details_id
 * @property int|null $user_id
 * @property string|null $username
 *
 * @package App\Models
 */
class AllotmentReservationValidityLog extends Model
{
	protected $table = 'allotment_reservation_validity_log';
	public $timestamps = false;

	protected $casts = [
		'allotment_id' => 'int',
		'allotment_validity_id' => 'int',
		'reservation_id' => 'int',
		'reservation_details_id' => 'int',
		'user_id' => 'int'
	];

	protected $dates = [
		'day',
		'created'
	];

	protected $fillable = [
		'allotment_id',
		'allotment_validity_id',
		'day',
		'note',
		'created',
		'reservation_id',
		'reservation_details_id',
		'user_id',
		'username'
	];
}
