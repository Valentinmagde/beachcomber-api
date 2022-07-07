<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VoucherCustomer
 * 
 * @property int $voucher_customer_id
 * @property int $reservation_id
 * @property int $customer_id
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class VoucherCustomer extends Model
{
	protected $table = 'voucher_customer';
	protected $primaryKey = 'voucher_customer_id';
	public $timestamps = false;

	protected $casts = [
		'reservation_id' => 'int',
		'customer_id' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'reservation_id',
		'customer_id',
		'valid_from',
		'valid_to'
	];
}
