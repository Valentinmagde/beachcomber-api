<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RmRateCardMarket
 * 
 * @property int $id
 * @property int $rate_card_id
 * @property int $market_id
 * @property Carbon|null $assigned_date
 *
 * @package App\Models
 */
class RmRateCardMarket extends Model
{
	protected $table = 'rm_rate_card_market';
	public $timestamps = false;

	protected $casts = [
		'rate_card_id' => 'int',
		'market_id' => 'int'
	];

	protected $dates = [
		'assigned_date'
	];

	protected $fillable = [
		'rate_card_id',
		'market_id',
		'assigned_date'
	];
}
