<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ReservationPayment
 * 
 * @property int $id
 * @property int $reservation_id
 * @property int $payment_mode_id
 * @property string $payment_mode
 * @property Carbon $payment_date
 * @property float $deposit_amount
 * @property float $deposit_received
 * @property int $is_full_payment
 * @property int $is_full_payment_at_hotel
 * @property int $user_id
 * @property string|null $user_name
 * @property Carbon $reservation_payment_timestamp
 * @property int $active
 *
 * @package App\Models
 */
class ReservationPayment extends Model
{
	protected $table = 'reservation_payment';
	public $timestamps = false;

	protected $casts = [
		'reservation_id' => 'int',
		'payment_mode_id' => 'int',
		'deposit_amount' => 'float',
		'deposit_received' => 'float',
		'is_full_payment' => 'int',
		'is_full_payment_at_hotel' => 'int',
		'user_id' => 'int',
		'active' => 'int'
	];

	protected $dates = [
		'payment_date',
		'reservation_payment_timestamp'
	];

	protected $fillable = [
		'reservation_id',
		'payment_mode_id',
		'payment_mode',
		'payment_date',
		'deposit_amount',
		'deposit_received',
		'is_full_payment',
		'is_full_payment_at_hotel',
		'user_id',
		'user_name',
		'reservation_payment_timestamp',
		'active'
	];
}
