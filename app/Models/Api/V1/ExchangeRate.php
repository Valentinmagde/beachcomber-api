<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ExchangeRate
 * 
 * @property int $id
 * @property int $currency_id
 * @property string $currency
 * @property string|null $base_currency
 * @property float $rate
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 * @property int $user_id
 *
 * @package App\Models
 */
class ExchangeRate extends Model
{
	protected $table = 'exchange_rate';
	public $timestamps = false;

	protected $casts = [
		'currency_id' => 'int',
		'rate' => 'float',
		'user_id' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'currency_id',
		'currency',
		'base_currency',
		'rate',
		'valid_from',
		'valid_to',
		'user_id'
	];
}
