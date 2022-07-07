<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class GroupReservationToReservation
 * 
 * @property int $Group_Reservation_to_Reservation_id
 * @property int $group_reservation_id
 * @property int $reservation_id
 * @property int $destination_id
 * @property int $hotel_id
 * @property Carbon $check_in
 * @property Carbon $check_out
 * @property int $num_nights
 * @property int $num_rooms
 * @property int $adult
 * @property int $child
 * @property int $teen
 * @property int $infant
 * @property string $additional_request
 * @property int $status_id
 * @property string $status
 * @property int $quote_status_id
 * @property string $quote_status
 * @property int $meal_plan_id
 * @property string $meal_plan
 * @property string $package
 * @property float $total
 * @property float $discounted_total
 * @property float $discounted_non_refundable_total
 * @property int $is_fully_paid
 * @property int $is_fully_paid_at_hotel
 * @property int $has_transfer
 * @property int $has_car_rental
 * @property int $has_lounge
 * @property bool $has_flight
 * @property int $payment_status_id
 * @property string $payment_status
 * @property int $payment_mode_id
 * @property string $payment_mode
 * @property Carbon $payment_date
 * @property int $export_status
 * @property Carbon $exported_on
 * @property Carbon $reservation_timestamp
 * @property bool $analytics_pixel
 * @property bool $active
 *
 * @package App\Models
 */
class GroupReservationToReservation extends Model
{
	protected $table = 'group_reservation_to_reservation';
	protected $primaryKey = 'Group_Reservation_to_Reservation_id';
	public $timestamps = false;

	protected $casts = [
		'group_reservation_id' => 'int',
		'reservation_id' => 'int',
		'destination_id' => 'int',
		'hotel_id' => 'int',
		'num_nights' => 'int',
		'num_rooms' => 'int',
		'adult' => 'int',
		'child' => 'int',
		'teen' => 'int',
		'infant' => 'int',
		'status_id' => 'int',
		'quote_status_id' => 'int',
		'meal_plan_id' => 'int',
		'total' => 'float',
		'discounted_total' => 'float',
		'discounted_non_refundable_total' => 'float',
		'is_fully_paid' => 'int',
		'is_fully_paid_at_hotel' => 'int',
		'has_transfer' => 'int',
		'has_car_rental' => 'int',
		'has_lounge' => 'int',
		'has_flight' => 'bool',
		'payment_status_id' => 'int',
		'payment_mode_id' => 'int',
		'export_status' => 'int',
		'analytics_pixel' => 'bool',
		'active' => 'bool'
	];

	protected $dates = [
		'check_in',
		'check_out',
		'payment_date',
		'exported_on',
		'reservation_timestamp'
	];

	protected $fillable = [
		'group_reservation_id',
		'reservation_id',
		'destination_id',
		'hotel_id',
		'check_in',
		'check_out',
		'num_nights',
		'num_rooms',
		'adult',
		'child',
		'teen',
		'infant',
		'additional_request',
		'status_id',
		'status',
		'quote_status_id',
		'quote_status',
		'meal_plan_id',
		'meal_plan',
		'package',
		'total',
		'discounted_total',
		'discounted_non_refundable_total',
		'is_fully_paid',
		'is_fully_paid_at_hotel',
		'has_transfer',
		'has_car_rental',
		'has_lounge',
		'has_flight',
		'payment_status_id',
		'payment_status',
		'payment_mode_id',
		'payment_mode',
		'payment_date',
		'export_status',
		'exported_on',
		'reservation_timestamp',
		'analytics_pixel',
		'active'
	];
}
