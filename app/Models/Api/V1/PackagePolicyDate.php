<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PackagePolicyDate
 * 
 * @property int $offer_date_policy_id
 * @property int|null $hotel_package_id
 * @property Carbon $booking_date
 * @property int $days_prior_arrival
 * @property int $has_minimum_stay
 * @property int $minimum_stay
 * @property int $has_days_prior_arrival
 * @property int $has_booking_range
 * @property int $has_booking_date
 * @property int $has_arrival_range
 * @property int $has_departure_range
 * @property int $has_prerequisite
 * @property int $pre_requisite_package_id
 * @property Carbon $booking_from
 * @property Carbon $booking_to
 * @property Carbon $arrival_from
 * @property Carbon $arrival_to
 * @property Carbon $departure_from
 * @property Carbon $departure_to
 *
 * @package App\Models
 */
class PackagePolicyDate extends Model
{
	protected $table = 'package_policy_date';
	protected $primaryKey = 'offer_date_policy_id';
	public $timestamps = false;

	protected $casts = [
		'hotel_package_id' => 'int',
		'days_prior_arrival' => 'int',
		'has_minimum_stay' => 'int',
		'minimum_stay' => 'int',
		'has_days_prior_arrival' => 'int',
		'has_booking_range' => 'int',
		'has_booking_date' => 'int',
		'has_arrival_range' => 'int',
		'has_departure_range' => 'int',
		'has_prerequisite' => 'int',
		'pre_requisite_package_id' => 'int'
	];

	protected $dates = [
		'booking_date',
		'booking_from',
		'booking_to',
		'arrival_from',
		'arrival_to',
		'departure_from',
		'departure_to'
	];

	protected $fillable = [
		'hotel_package_id',
		'booking_date',
		'days_prior_arrival',
		'has_minimum_stay',
		'minimum_stay',
		'has_days_prior_arrival',
		'has_booking_range',
		'has_booking_date',
		'has_arrival_range',
		'has_departure_range',
		'has_prerequisite',
		'pre_requisite_package_id',
		'booking_from',
		'booking_to',
		'arrival_from',
		'arrival_to',
		'departure_from',
		'departure_to'
	];
}
