<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ReservationDetail
 * 
 * @property int $reservation_details_id
 * @property int $reservation_id
 * @property int $tariff_id
 * @property int $meal_plan_id
 * @property int $meal_plan
 * @property int $room_id
 * @property int $upgraded_from_room_id
 * @property int $room_num
 * @property Carbon $check_in
 * @property Carbon $check_out
 * @property int $num_nights
 * @property int $num_rooms
 * @property int $adult
 * @property int $child
 * @property int $teen
 * @property int $infant
 * @property int $adult_sharing
 * @property int $child_sharing
 * @property int $teen_sharing
 * @property string $child_age
 * @property string $infant_age
 * @property int $tariff_type_id
 * @property float $adult_rate
 * @property float $adult_sharing_rate
 * @property float $child_rate
 * @property float $teen_rate
 * @property float $discounted_adult_rate
 * @property float $discounted_adult_sharing_rate
 * @property float $discounted_child_rate
 * @property float $discounted_teen_rate
 * @property float $total
 * @property float $discounted_total
 * @property int $meal_package_id
 * @property int $hotel_package_id
 * @property int $currency_id
 * @property string $currency
 * @property int $rate_multiplier
 * @property int $client_type_id
 * @property string $client_type
 * @property string $client_type_code
 * @property string $arrival_flight
 * @property string $arrival_flight_time
 * @property string $departure_flight
 * @property string $departure_flight_time
 * @property string $client_name
 * @property int $bed_type_id
 * @property string $bed_type
 * @property int $resa_type_id
 * @property string $resa_type
 * @property int $resa_status_id
 * @property string $resa_status
 * @property Carbon $option_date
 * @property int $allotment_id
 * @property string $allotment_code
 * @property int $paid_by_id
 * @property string $paid_by
 * @property int $room_sharing
 * @property string $requested_room_number
 * @property string $guest_remarks
 * @property string $hotel_remarks
 * @property string $pms_reservation_id
 * @property string $pms_transaction_status
 * @property string $rate_group
 * @property int $is_custom_tariff
 * @property string $custom_tariff_reason
 * @property int $custom_tariff_approved_by_id
 * @property int $user_id
 * @property string $user_name
 * @property bool $active_in_pms
 * @property string|null $pms_status
 * @property string|null $hms_status
 * @property bool $active
 * @property Carbon $reservation_details_timestamp
 *
 * @package App\Models
 */
class ReservationDetail extends Model
{
	protected $table = 'reservation_details';
	protected $primaryKey = 'reservation_details_id';
	public $timestamps = false;

	protected $casts = [
		'reservation_id' => 'int',
		'tariff_id' => 'int',
		'meal_plan_id' => 'int',
		'meal_plan' => 'int',
		'room_id' => 'int',
		'upgraded_from_room_id' => 'int',
		'room_num' => 'int',
		'num_nights' => 'int',
		'num_rooms' => 'int',
		'adult' => 'int',
		'child' => 'int',
		'teen' => 'int',
		'infant' => 'int',
		'adult_sharing' => 'int',
		'child_sharing' => 'int',
		'teen_sharing' => 'int',
		'tariff_type_id' => 'int',
		'adult_rate' => 'float',
		'adult_sharing_rate' => 'float',
		'child_rate' => 'float',
		'teen_rate' => 'float',
		'discounted_adult_rate' => 'float',
		'discounted_adult_sharing_rate' => 'float',
		'discounted_child_rate' => 'float',
		'discounted_teen_rate' => 'float',
		'total' => 'float',
		'discounted_total' => 'float',
		'meal_package_id' => 'int',
		'hotel_package_id' => 'int',
		'currency_id' => 'int',
		'rate_multiplier' => 'int',
		'client_type_id' => 'int',
		'bed_type_id' => 'int',
		'resa_type_id' => 'int',
		'resa_status_id' => 'int',
		'allotment_id' => 'int',
		'paid_by_id' => 'int',
		'room_sharing' => 'int',
		'is_custom_tariff' => 'int',
		'custom_tariff_approved_by_id' => 'int',
		'user_id' => 'int',
		'active_in_pms' => 'bool',
		'active' => 'bool'
	];

	protected $dates = [
		'check_in',
		'check_out',
		'option_date',
		'reservation_details_timestamp'
	];

	protected $fillable = [
		'reservation_id',
		'tariff_id',
		'meal_plan_id',
		'meal_plan',
		'room_id',
		'upgraded_from_room_id',
		'room_num',
		'check_in',
		'check_out',
		'num_nights',
		'num_rooms',
		'adult',
		'child',
		'teen',
		'infant',
		'adult_sharing',
		'child_sharing',
		'teen_sharing',
		'child_age',
		'infant_age',
		'tariff_type_id',
		'adult_rate',
		'adult_sharing_rate',
		'child_rate',
		'teen_rate',
		'discounted_adult_rate',
		'discounted_adult_sharing_rate',
		'discounted_child_rate',
		'discounted_teen_rate',
		'total',
		'discounted_total',
		'meal_package_id',
		'hotel_package_id',
		'currency_id',
		'currency',
		'rate_multiplier',
		'client_type_id',
		'client_type',
		'client_type_code',
		'arrival_flight',
		'arrival_flight_time',
		'departure_flight',
		'departure_flight_time',
		'client_name',
		'bed_type_id',
		'bed_type',
		'resa_type_id',
		'resa_type',
		'resa_status_id',
		'resa_status',
		'option_date',
		'allotment_id',
		'allotment_code',
		'paid_by_id',
		'paid_by',
		'room_sharing',
		'requested_room_number',
		'guest_remarks',
		'hotel_remarks',
		'pms_reservation_id',
		'pms_transaction_status',
		'rate_group',
		'is_custom_tariff',
		'custom_tariff_reason',
		'custom_tariff_approved_by_id',
		'user_id',
		'user_name',
		'active_in_pms',
		'pms_status',
		'hms_status',
		'active',
		'reservation_details_timestamp'
	];
}
