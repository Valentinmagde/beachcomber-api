<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class OfferPolicyDate
 * 
 * @property int $offer_date_policy_id
 * @property int|null $offer_id
 * @property Carbon|null $booking_date
 * @property int $has_minimum_stay
 * @property int $has_days_prior_arrival
 * @property int $has_booking_date
 * @property int $has_booking_range
 * @property int $has_arrival_range
 * @property int $has_departure_range
 * @property int $days_prior_arrival
 * @property int $days_prior_arrival_to
 * @property int $minimum_stay
 * @property Carbon|null $booking_from
 * @property Carbon|null $booking_to
 * @property Carbon|null $arrival_from
 * @property Carbon|null $arrival_to
 * @property Carbon $departure_from
 * @property Carbon $departure_to
 *
 * @package App\Models
 */
class OfferPolicyDate extends Model
{
	protected $table = 'offer_policy_date';
	protected $primaryKey = 'offer_date_policy_id';
	public $timestamps = false;

	protected $casts = [
		'offer_id' => 'int',
		'has_minimum_stay' => 'int',
		'has_days_prior_arrival' => 'int',
		'has_booking_date' => 'int',
		'has_booking_range' => 'int',
		'has_arrival_range' => 'int',
		'has_departure_range' => 'int',
		'days_prior_arrival' => 'int',
		'days_prior_arrival_to' => 'int',
		'minimum_stay' => 'int'
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
		'offer_id',
		'booking_date',
		'has_minimum_stay',
		'has_days_prior_arrival',
		'has_booking_date',
		'has_booking_range',
		'has_arrival_range',
		'has_departure_range',
		'days_prior_arrival',
		'days_prior_arrival_to',
		'minimum_stay',
		'booking_from',
		'booking_to',
		'arrival_from',
		'arrival_to',
		'departure_from',
		'departure_to'
	];
}
