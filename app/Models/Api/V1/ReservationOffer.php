<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ReservationOffer
 * 
 * @property int $reservation_offer_id
 * @property int $reservation_id
 * @property int $offer_id
 * @property int $offer_type_id
 * @property string|null $offer_detail
 * @property float $adult_discount
 * @property float $child_discount
 * @property int $offer_on_rate
 * @property int $offer_on_package
 * @property int $active
 * @property int $user_id
 * @property string $user_name
 * @property Carbon|null $reservation_offer_timestamp
 *
 * @package App\Models
 */
class ReservationOffer extends Model
{
	protected $table = 'reservation_offer';
	protected $primaryKey = 'reservation_offer_id';
	public $timestamps = false;

	protected $casts = [
		'reservation_id' => 'int',
		'offer_id' => 'int',
		'offer_type_id' => 'int',
		'adult_discount' => 'float',
		'child_discount' => 'float',
		'offer_on_rate' => 'int',
		'offer_on_package' => 'int',
		'active' => 'int',
		'user_id' => 'int'
	];

	protected $dates = [
		'reservation_offer_timestamp'
	];

	protected $fillable = [
		'reservation_id',
		'offer_id',
		'offer_type_id',
		'offer_detail',
		'adult_discount',
		'child_discount',
		'offer_on_rate',
		'offer_on_package',
		'active',
		'user_id',
		'user_name',
		'reservation_offer_timestamp'
	];
}
