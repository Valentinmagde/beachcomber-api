<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ReservationFlight
 * 
 * @property int $reservation_flight_id
 * @property int $reservation_id
 * @property int|null $airport_id
 * @property string $airport
 * @property int $num_nights
 * @property Carbon $date_of_departure
 *
 * @package App\Models
 */
class ReservationFlight extends Model
{
	protected $table = 'reservation_flight';
	protected $primaryKey = 'reservation_flight_id';
	public $timestamps = false;

	protected $casts = [
		'reservation_id' => 'int',
		'airport_id' => 'int',
		'num_nights' => 'int'
	];

	protected $dates = [
		'date_of_departure'
	];

	protected $fillable = [
		'reservation_id',
		'airport_id',
		'airport',
		'num_nights',
		'date_of_departure'
	];
}
