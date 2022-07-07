<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FlightBookingCountry
 * 
 * @property int $flight_booking_country_id
 * @property int|null $country_id
 * @property int|null $flight_booking_market_id
 * @property int|null $active
 *
 * @package App\Models
 */
class FlightBookingCountry extends Model
{
	protected $table = 'flight_booking_country';
	protected $primaryKey = 'flight_booking_country_id';
	public $timestamps = false;

	protected $casts = [
		'country_id' => 'int',
		'flight_booking_market_id' => 'int',
		'active' => 'int'
	];

	protected $fillable = [
		'country_id',
		'flight_booking_market_id',
		'active'
	];
}
