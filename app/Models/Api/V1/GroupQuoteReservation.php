<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class GroupQuoteReservation
 * 
 * @property float $group_reservation_id
 * @property Carbon|null $reservation_date
 * @property string|null $client_type
 * @property int|null $client_type_id
 * @property int|null $destination_id
 * @property float|null $hotel_id
 * @property Carbon|null $check_in
 * @property Carbon|null $check_out
 * @property int|null $num_nights
 * @property int|null $num_rooms
 * @property float|null $country_id
 * @property float|null $agency_id
 * @property int|null $language_id
 * @property Carbon|null $arrival_date
 * @property Carbon|null $departure_date
 * @property string|null $arrival_flight
 * @property string|null $departure_flight
 * @property Carbon|null $wedding_date
 * @property int|null $adult
 * @property int|null $child
 * @property int|null $teen
 * @property int|null $infant
 * @property string|null $additional_request
 * @property int|null $status_id
 * @property string|null $status
 * @property int|null $quote_status_id
 * @property string|null $quote_status
 * @property int|null $meal_plan_id
 * @property string|null $meal_plan
 * @property string|null $package
 * @property float|null $total
 * @property float|null $discounted_total
 * @property float|null $discounted_non_refundable_total
 * @property int|null $currency_id
 * @property string|null $currency
 * @property int|null $is_direct
 * @property int|null $is_refundable
 * @property int|null $is_wedding
 * @property int|null $is_honeymoon
 * @property int|null $is_newly_wed
 * @property int|null $is_wedding_party
 * @property int|null $is_group
 * @property int|null $is_industry_partner
 * @property int|null $is_travel_agent
 * @property int|null $is_fully_paid
 * @property int|null $is_fully_paid_at_hotel
 * @property int|null $has_transfer
 * @property int|null $has_car_rental
 * @property int|null $has_lounge
 * @property bool|null $has_flight
 * @property int|null $payment_status_id
 * @property string|null $payment_status
 * @property float|null $payment_mode_id
 * @property string|null $payment_mode
 * @property Carbon|null $payment_date
 * @property int|null $export_status
 * @property Carbon|null $exported_on
 * @property Carbon $reservation_timestamp
 * @property bool|null $analytics_pixel
 *
 * @package App\Models
 */
class GroupQuoteReservation extends Model
{
	protected $table = 'group_quote_reservation';
	protected $primaryKey = 'group_reservation_id';
	public $timestamps = false;

	protected $casts = [
		'client_type_id' => 'int',
		'destination_id' => 'int',
		'hotel_id' => 'float',
		'num_nights' => 'int',
		'num_rooms' => 'int',
		'country_id' => 'float',
		'agency_id' => 'float',
		'language_id' => 'int',
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
		'currency_id' => 'int',
		'is_direct' => 'int',
		'is_refundable' => 'int',
		'is_wedding' => 'int',
		'is_honeymoon' => 'int',
		'is_newly_wed' => 'int',
		'is_wedding_party' => 'int',
		'is_group' => 'int',
		'is_industry_partner' => 'int',
		'is_travel_agent' => 'int',
		'is_fully_paid' => 'int',
		'is_fully_paid_at_hotel' => 'int',
		'has_transfer' => 'int',
		'has_car_rental' => 'int',
		'has_lounge' => 'int',
		'has_flight' => 'bool',
		'payment_status_id' => 'int',
		'payment_mode_id' => 'float',
		'export_status' => 'int',
		'analytics_pixel' => 'bool'
	];

	protected $dates = [
		'reservation_date',
		'check_in',
		'check_out',
		'arrival_date',
		'departure_date',
		'wedding_date',
		'payment_date',
		'exported_on',
		'reservation_timestamp'
	];

	protected $fillable = [
		'reservation_date',
		'client_type',
		'client_type_id',
		'destination_id',
		'hotel_id',
		'check_in',
		'check_out',
		'num_nights',
		'num_rooms',
		'country_id',
		'agency_id',
		'language_id',
		'arrival_date',
		'departure_date',
		'arrival_flight',
		'departure_flight',
		'wedding_date',
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
		'currency_id',
		'currency',
		'is_direct',
		'is_refundable',
		'is_wedding',
		'is_honeymoon',
		'is_newly_wed',
		'is_wedding_party',
		'is_group',
		'is_industry_partner',
		'is_travel_agent',
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
		'analytics_pixel'
	];
}
