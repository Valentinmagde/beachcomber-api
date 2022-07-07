<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class GroupQuoteReservationOffer
 * 
 * @property float $group_reservation_offer_id
 * @property float|null $group_reservation_id
 * @property float|null $offer_id
 * @property int|null $active
 * @property Carbon $group_reservation_offer_timestamp
 *
 * @package App\Models
 */
class GroupQuoteReservationOffer extends Model
{
	protected $table = 'group_quote_reservation_offer';
	protected $primaryKey = 'group_reservation_offer_id';
	public $timestamps = false;

	protected $casts = [
		'group_reservation_id' => 'float',
		'offer_id' => 'float',
		'active' => 'int'
	];

	protected $dates = [
		'group_reservation_offer_timestamp'
	];

	protected $fillable = [
		'group_reservation_id',
		'offer_id',
		'active',
		'group_reservation_offer_timestamp'
	];
}
