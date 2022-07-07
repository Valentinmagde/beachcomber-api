<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FlightBookingMarket
 * 
 * @property int $flight_booking_market_id
 * @property string|null $flight_booking_market
 * @property int|null $flight_handler_id
 * @property int|null $active
 *
 * @package App\Models
 */
class FlightBookingMarket extends Model
{
	protected $table = 'flight_booking_market';
	protected $primaryKey = 'flight_booking_market_id';
	public $timestamps = false;

	protected $casts = [
		'flight_handler_id' => 'int',
		'active' => 'int'
	];

	protected $fillable = [
		'flight_booking_market',
		'flight_handler_id',
		'active'
	];
}
