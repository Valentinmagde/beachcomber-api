<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VoucherReservation
 * 
 * @property int $reservation_id
 * @property int $voucher_id
 * @property string $voucher_code
 * @property int $voucher_type_id
 * @property Carbon $reservation_date
 * @property string $client_type
 * @property int $client_type_id
 * @property int $country_id
 * @property int $language_id
 * @property int $currency_id
 * @property string $currency
 * @property string $payment_status
 * @property int $payment_status_id
 * @property string $payment_mode
 * @property int $payment_mode_id
 * @property Carbon $payment_date
 * @property Carbon $reservation_timestamp
 * @property int $status_id
 *
 * @package App\Models
 */
class VoucherReservation extends Model
{
	protected $table = 'voucher_reservation';
	protected $primaryKey = 'reservation_id';
	public $timestamps = false;

	protected $casts = [
		'voucher_id' => 'int',
		'voucher_type_id' => 'int',
		'client_type_id' => 'int',
		'country_id' => 'int',
		'language_id' => 'int',
		'currency_id' => 'int',
		'payment_status_id' => 'int',
		'payment_mode_id' => 'int',
		'status_id' => 'int'
	];

	protected $dates = [
		'reservation_date',
		'payment_date',
		'reservation_timestamp'
	];

	protected $fillable = [
		'voucher_id',
		'voucher_code',
		'voucher_type_id',
		'reservation_date',
		'client_type',
		'client_type_id',
		'country_id',
		'language_id',
		'currency_id',
		'currency',
		'payment_status',
		'payment_status_id',
		'payment_mode',
		'payment_mode_id',
		'payment_date',
		'reservation_timestamp',
		'status_id'
	];
}
