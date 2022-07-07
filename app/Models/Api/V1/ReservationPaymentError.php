<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ReservationPaymentError
 * 
 * @property int $reservation_payment_id
 * @property int $reservation_id
 * @property string|null $payment_error_message
 * @property string|null $payment_error_code
 * @property Carbon $transaction_timestamp
 *
 * @package App\Models
 */
class ReservationPaymentError extends Model
{
	protected $table = 'reservation_payment_error';
	protected $primaryKey = 'reservation_payment_id';
	public $timestamps = false;

	protected $casts = [
		'reservation_id' => 'int'
	];

	protected $dates = [
		'transaction_timestamp'
	];

	protected $fillable = [
		'reservation_id',
		'payment_error_message',
		'payment_error_code',
		'transaction_timestamp'
	];
}
