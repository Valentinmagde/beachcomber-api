<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class OtaBooking
 * 
 * @property int $id
 * @property Carbon $booking_date
 * @property string $customer_name
 * @property int $hotel_id
 * @property int $room_id
 * @property int $number_of_rooms
 * @property Carbon $check_in_date
 * @property Carbon $check_out_date
 * @property int $offer_id
 * @property int $country_id
 * @property int $ota_source
 * @property int $room_nights
 * @property float $daily_rate
 * @property float $total_turnover
 * @property float $ota_commission
 * @property float $ota_net_turnover
 * @property int $meal_plan
 * @property string $remarks
 * @property bool $status
 * @property Carbon $created
 * @property int $created_by
 *
 * @package App\Models
 */
class OtaBooking extends Model
{
	protected $table = 'ota_booking';
	public $timestamps = false;

	protected $casts = [
		'hotel_id' => 'int',
		'room_id' => 'int',
		'number_of_rooms' => 'int',
		'offer_id' => 'int',
		'country_id' => 'int',
		'ota_source' => 'int',
		'room_nights' => 'int',
		'daily_rate' => 'float',
		'total_turnover' => 'float',
		'ota_commission' => 'float',
		'ota_net_turnover' => 'float',
		'meal_plan' => 'int',
		'status' => 'bool',
		'created_by' => 'int'
	];

	protected $dates = [
		'booking_date',
		'check_in_date',
		'check_out_date',
		'created'
	];

	protected $fillable = [
		'booking_date',
		'customer_name',
		'hotel_id',
		'room_id',
		'number_of_rooms',
		'check_in_date',
		'check_out_date',
		'offer_id',
		'country_id',
		'ota_source',
		'room_nights',
		'daily_rate',
		'total_turnover',
		'ota_commission',
		'ota_net_turnover',
		'meal_plan',
		'remarks',
		'status',
		'created',
		'created_by'
	];
}
