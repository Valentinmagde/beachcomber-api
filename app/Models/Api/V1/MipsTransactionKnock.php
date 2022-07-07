<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MipsTransactionKnock
 * 
 * @property int $id
 * @property int $reservation_id
 * @property string|null $currency
 * @property float|null $amount
 * @property string|null $outlet
 * @property string|null $packet
 * @property Carbon|null $created
 *
 * @package App\Models
 */
class MipsTransactionKnock extends Model
{
	protected $table = 'mips_transaction_knock';
	public $timestamps = false;

	protected $casts = [
		'reservation_id' => 'int',
		'amount' => 'float'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'reservation_id',
		'currency',
		'amount',
		'outlet',
		'packet',
		'created'
	];
}
