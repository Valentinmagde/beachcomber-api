<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class GroupQuoteReservationDetailsOffer
 * 
 * @property float $group_reservation_details_offer_id
 * @property float|null $group_reservation_id
 * @property float|null $group_reservation_details_id
 * @property float|null $offer_id
 * @property int|null $active
 * @property Carbon $reservation_offer_timestamp
 *
 * @package App\Models
 */
class GroupQuoteReservationDetailsOffer extends Model
{
	protected $table = 'group_quote_reservation_details_offer';
	protected $primaryKey = 'group_reservation_details_offer_id';
	public $timestamps = false;

	protected $casts = [
		'group_reservation_id' => 'float',
		'group_reservation_details_id' => 'float',
		'offer_id' => 'float',
		'active' => 'int'
	];

	protected $dates = [
		'reservation_offer_timestamp'
	];

	protected $fillable = [
		'group_reservation_id',
		'group_reservation_details_id',
		'offer_id',
		'active',
		'reservation_offer_timestamp'
	];
}
