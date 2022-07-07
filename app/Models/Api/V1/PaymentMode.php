<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PaymentMode
 * 
 * @property int $payment_mode_id
 * @property string $payment_mode
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class PaymentMode extends Model
{
	protected $table = 'payment_mode';
	protected $primaryKey = 'payment_mode_id';
	public $timestamps = false;

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'payment_mode',
		'valid_from',
		'valid_to'
	];
}
