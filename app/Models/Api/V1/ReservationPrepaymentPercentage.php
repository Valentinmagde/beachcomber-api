<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ReservationPrepaymentPercentage
 * 
 * @property int $reservation_prepayment_id
 * @property int $hotel_id
 * @property float|null $Reservation_Prepayment_Percentage
 * @property Carbon|null $valid_from
 * @property Carbon|null $valid_to
 *
 * @package App\Models
 */
class ReservationPrepaymentPercentage extends Model
{
	protected $table = 'reservation_prepayment_percentage';
	public $timestamps = false;

	protected $casts = [
		'hotel_id' => 'int',
		'Reservation_Prepayment_Percentage' => 'float'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'Reservation_Prepayment_Percentage',
		'valid_from',
		'valid_to'
	];
}
