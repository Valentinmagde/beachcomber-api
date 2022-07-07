<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Reservation
 * 
 * @property int $reservation_id
 * @property Carbon $reservation_date
 * @property string $client_type
 * @property int $client_type_id
 * @property int $destination_id
 * @property int $hotel_id
 * @property Carbon $check_in
 * @property Carbon $check_out
 * @property int $num_nights
 * @property int $num_rooms
 * @property int $country_id
 * @property string $agency
 * @property int $agency_id
 * @property string $paying_agency
 * @property int $paying_agency_id
 * @property int $paid_by_id
 * @property string $paid_by
 * @property string $agency_resa_no
 * @property int $ground_handler_id
 * @property string $ground_handler
 * @property int $language_id
 * @property Carbon $arrival_date
 * @property Carbon $departure_date
 * @property string $arrival_flight
 * @property string $arrival_flight_time
 * @property string $departure_flight
 * @property string $departure_flight_time
 * @property Carbon $wedding_date
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
 * @property int $currency_id
 * @property string $currency
 * @property int $is_block_off
 * @property int $is_reported
 * @property int $is_direct
 * @property int $is_refundable
 * @property int $is_wedding
 * @property int $is_honeymoon
 * @property int $is_newly_wed
 * @property int $is_wedding_party
 * @property int $is_group
 * @property int $is_industry_partner
 * @property int $is_travel_agent
 * @property int $is_fully_paid
 * @property int $is_fully_paid_at_hotel
 * @property int $has_transfer
 * @property int $has_car_rental
 * @property int $has_lounge
 * @property bool $has_flight
 * @property bool $has_issue
 * @property string|null $reservation_issue
 * @property string $reservation_source
 * @property int $reservation_source_id
 * @property string $reservation_type
 * @property int $reservation_type_id
 * @property int $payment_status_id
 * @property string $payment_status
 * @property int $payment_mode_id
 * @property string $payment_mode
 * @property Carbon $payment_date
 * @property int $export_status
 * @property Carbon $exported_on
 * @property Carbon $reservation_timestamp
 * @property bool $analytics_pixel
 * @property Carbon $option_date
 * @property Carbon $reminder_date
 * @property string $group_name
 * @property string|null $contact_person
 * @property string|null $contact_email
 * @property string $pms_reservation_id
 * @property int $pms_transaction_status_id
 * @property string $pms_transaction_status
 * @property string $hms_transaction_status
 * @property string|null $hms_reservation_id
 * @property int $local_crs_id
 * @property int $live_crs_id
 * @property string $reported_crs_id
 * @property bool $live_to_local_sending_flag
 * @property int $user_id
 * @property string $user_name
 * @property string $system
 * @property int $export_hms_status
 * @property Carbon $exported_hms_on
 *
 * @package App\Models
 */
class Reservation extends Model
{
	protected $table = 'reservation';
	protected $primaryKey = 'reservation_id';
	public $timestamps = false;

	protected $casts = [
		'client_type_id' => 'int',
		'destination_id' => 'int',
		'hotel_id' => 'int',
		'num_nights' => 'int',
		'num_rooms' => 'int',
		'country_id' => 'int',
		'agency_id' => 'int',
		'paying_agency_id' => 'int',
		'paid_by_id' => 'int',
		'ground_handler_id' => 'int',
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
		'is_block_off' => 'int',
		'is_reported' => 'int',
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
		'has_issue' => 'bool',
		'reservation_source_id' => 'int',
		'reservation_type_id' => 'int',
		'payment_status_id' => 'int',
		'payment_mode_id' => 'int',
		'export_status' => 'int',
		'analytics_pixel' => 'bool',
		'pms_transaction_status_id' => 'int',
		'local_crs_id' => 'int',
		'live_crs_id' => 'int',
		'live_to_local_sending_flag' => 'bool',
		'user_id' => 'int',
		'export_hms_status' => 'int'
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
		'reservation_timestamp',
		'option_date',
		'reminder_date',
		'exported_hms_on'
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
		'agency',
		'agency_id',
		'paying_agency',
		'paying_agency_id',
		'paid_by_id',
		'paid_by',
		'agency_resa_no',
		'ground_handler_id',
		'ground_handler',
		'language_id',
		'arrival_date',
		'departure_date',
		'arrival_flight',
		'arrival_flight_time',
		'departure_flight',
		'departure_flight_time',
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
		'is_block_off',
		'is_reported',
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
		'has_issue',
		'reservation_issue',
		'reservation_source',
		'reservation_source_id',
		'reservation_type',
		'reservation_type_id',
		'payment_status_id',
		'payment_status',
		'payment_mode_id',
		'payment_mode',
		'payment_date',
		'export_status',
		'exported_on',
		'reservation_timestamp',
		'analytics_pixel',
		'option_date',
		'reminder_date',
		'group_name',
		'contact_person',
		'contact_email',
		'pms_reservation_id',
		'pms_transaction_status_id',
		'pms_transaction_status',
		'hms_transaction_status',
		'hms_reservation_id',
		'local_crs_id',
		'live_crs_id',
		'reported_crs_id',
		'live_to_local_sending_flag',
		'user_id',
		'user_name',
		'system',
		'export_hms_status',
		'exported_hms_on'
	];
}
