<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RoomAllotmentReservation
 * 
 * @property int $id
 * @property int $allotment_id
 * @property int $reservation_id
 * @property Carbon|null $day_date
 * @property bool $active
 * @property Carbon $created
 * @property string|null $note
 *
 * @package App\Models
 */
class RoomAllotmentReservation extends Model
{
	protected $table = 'room_allotment_reservation';
	public $timestamps = false;

	protected $casts = [
		'allotment_id' => 'int',
		'reservation_id' => 'int',
		'active' => 'bool'
	];

	protected $dates = [
		'day_date',
		'created'
	];

	protected $fillable = [
		'allotment_id',
		'reservation_id',
		'day_date',
		'active',
		'created',
		'note'
	];
}
