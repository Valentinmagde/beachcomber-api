<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FlightAirport
 * 
 * @property int $airport_id
 * @property int|null $airport_country_id
 * @property int|null $flight_booking_market_id
 * @property int|null $active
 * @property Carbon|null $valid_from
 * @property Carbon|null $valid_to
 *
 * @package App\Models
 */
class FlightAirport extends Model
{
	protected $table = 'flight_airport';
	protected $primaryKey = 'airport_id';
	public $timestamps = false;

	protected $casts = [
		'airport_country_id' => 'int',
		'flight_booking_market_id' => 'int',
		'active' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'airport_country_id',
		'flight_booking_market_id',
		'active',
		'valid_from',
		'valid_to'
	];
}
