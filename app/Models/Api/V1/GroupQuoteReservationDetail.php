<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class GroupQuoteReservationDetail
 * 
 * @property float $group_reservation_details_id
 * @property float|null $group_reservation_id
 * @property float|null $tariff_id
 * @property float|null $room_id
 * @property float|null $room_num
 * @property Carbon|null $check_in
 * @property Carbon|null $check_out
 * @property float|null $num_nights
 * @property float|null $num_rooms
 * @property float|null $adult
 * @property float|null $child
 * @property float|null $teen
 * @property float|null $infant
 * @property float|null $adult_sharing
 * @property float|null $child_sharing
 * @property float|null $teen_sharing
 * @property float|null $adult_rate
 * @property float|null $child_rate
 * @property float|null $teen_rate
 * @property float|null $discounted_adult_rate
 * @property float|null $discounted_child_rate
 * @property float|null $discounted_teen_rate
 * @property float|null $total
 * @property float|null $discounted_total
 * @property int|null $currency_id
 * @property string|null $currency
 * @property bool|null $active
 * @property Carbon $reservation_details_timestamp
 *
 * @package App\Models
 */
class GroupQuoteReservationDetail extends Model
{
	protected $table = 'group_quote_reservation_details';
	protected $primaryKey = 'group_reservation_details_id';
	public $timestamps = false;

	protected $casts = [
		'group_reservation_id' => 'float',
		'tariff_id' => 'float',
		'room_id' => 'float',
		'room_num' => 'float',
		'num_nights' => 'float',
		'num_rooms' => 'float',
		'adult' => 'float',
		'child' => 'float',
		'teen' => 'float',
		'infant' => 'float',
		'adult_sharing' => 'float',
		'child_sharing' => 'float',
		'teen_sharing' => 'float',
		'adult_rate' => 'float',
		'child_rate' => 'float',
		'teen_rate' => 'float',
		'discounted_adult_rate' => 'float',
		'discounted_child_rate' => 'float',
		'discounted_teen_rate' => 'float',
		'total' => 'float',
		'discounted_total' => 'float',
		'currency_id' => 'int',
		'active' => 'bool'
	];

	protected $dates = [
		'check_in',
		'check_out',
		'reservation_details_timestamp'
	];

	protected $fillable = [
		'group_reservation_id',
		'tariff_id',
		'room_id',
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
		'adult_rate',
		'child_rate',
		'teen_rate',
		'discounted_adult_rate',
		'discounted_child_rate',
		'discounted_teen_rate',
		'total',
		'discounted_total',
		'currency_id',
		'currency',
		'active',
		'reservation_details_timestamp'
	];
}
