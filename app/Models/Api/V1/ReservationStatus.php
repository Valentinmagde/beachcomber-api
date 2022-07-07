<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ReservationStatus
 * 
 * @property int $reservation_status_id
 * @property string|null $reservation_status
 * @property Carbon|null $valid_from
 * @property Carbon|null $valid_to
 *
 * @package App\Models
 */
class ReservationStatus extends Model
{
	protected $table = 'reservation_status';
	protected $primaryKey = 'reservation_status_id';
	public $timestamps = false;

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'reservation_status',
		'valid_from',
		'valid_to'
	];
}
