<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TariffRmRateCardMarket
 * 
 * @property int $id
 * @property int $rate_card_id
 * @property int $market_id
 * @property Carbon|null $assigned_date
 * @property Carbon|null $applicable_from
 * @property Carbon|null $applicable_to
 * @property Carbon|null $active_from
 * @property Carbon|null $active_to
 *
 * @package App\Models
 */
class TariffRmRateCardMarket extends Model
{
	protected $table = 'tariff_rm_rate_card_market';
	public $timestamps = false;

	protected $casts = [
		'rate_card_id' => 'int',
		'market_id' => 'int'
	];

	protected $dates = [
		'assigned_date',
		'applicable_from',
		'applicable_to',
		'active_from',
		'active_to'
	];

	protected $fillable = [
		'rate_card_id',
		'market_id',
		'assigned_date',
		'applicable_from',
		'applicable_to',
		'active_from',
		'active_to'
	];
}
