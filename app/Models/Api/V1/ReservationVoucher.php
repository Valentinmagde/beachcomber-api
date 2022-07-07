<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ReservationVoucher
 * 
 * @property int $ID
 * @property int $Reservation_ID
 * @property int $Voucher_ID
 * @property int $Reservation_Discount_ID
 * @property int $Reservation_Payment_ID
 * @property Carbon $created
 *
 * @package App\Models
 */
class ReservationVoucher extends Model
{
	protected $table = 'reservation_voucher';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'Reservation_ID' => 'int',
		'Voucher_ID' => 'int',
		'Reservation_Discount_ID' => 'int',
		'Reservation_Payment_ID' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'Reservation_ID',
		'Voucher_ID',
		'Reservation_Discount_ID',
		'Reservation_Payment_ID',
		'created'
	];
}
