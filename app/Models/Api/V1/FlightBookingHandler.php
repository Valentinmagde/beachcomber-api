<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FlightBookingHandler
 * 
 * @property int $flight_booking_handler_id
 * @property string|null $flight_booking_handler
 * @property int|null $is_via_email
 * @property string|null $email
 * @property int|null $is_via_api
 * @property string|null $api_details
 * @property int|null $active
 *
 * @package App\Models
 */
class FlightBookingHandler extends Model
{
	protected $table = 'flight_booking_handler';
	protected $primaryKey = 'flight_booking_handler_id';
	public $timestamps = false;

	protected $casts = [
		'is_via_email' => 'int',
		'is_via_api' => 'int',
		'active' => 'int'
	];

	protected $fillable = [
		'flight_booking_handler',
		'is_via_email',
		'email',
		'is_via_api',
		'api_details',
		'active'
	];
}
