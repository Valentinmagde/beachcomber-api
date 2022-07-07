<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ReservationPaymentLog
 * 
 * @property int $payment_log_id
 * @property Carbon|null $log_date
 * @property int|null $reservation_id
 * @property int|null $payment_type
 * @property int|null $is_client_mail
 * @property int|null $is_payment
 * @property string|null $is_payment_description
 * @property string|null $status_description
 * @property string|null $payment_type_description
 * @property string|null $response_log
 * @property int|null $is_hotel_mail
 *
 * @package App\Models
 */
class ReservationPaymentLog extends Model
{
	protected $table = 'reservation_payment_log';
	protected $primaryKey = 'payment_log_id';
	public $timestamps = false;

	protected $casts = [
		'reservation_id' => 'int',
		'payment_type' => 'int',
		'is_client_mail' => 'int',
		'is_payment' => 'int',
		'is_hotel_mail' => 'int'
	];

	protected $dates = [
		'log_date'
	];

	protected $fillable = [
		'log_date',
		'reservation_id',
		'payment_type',
		'is_client_mail',
		'is_payment',
		'is_payment_description',
		'status_description',
		'payment_type_description',
		'response_log',
		'is_hotel_mail'
	];
}
