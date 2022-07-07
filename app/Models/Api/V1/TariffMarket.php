<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TariffMarket
 * 
 * @property int $tariff_market_id
 * @property int|null $tariff_id
 * @property int|null $market_id
 * @property int|null $tariff_period_id
 * @property Carbon|null $applicable_from
 * @property Carbon|null $applicable_to
 * @property Carbon|null $active_from
 * @property Carbon $active_to
 * @property bool $is_extended
 *
 * @package App\Models
 */
class TariffMarket extends Model
{
	protected $table = 'tariff_market';
	protected $primaryKey = 'tariff_market_id';
	public $timestamps = false;

	protected $casts = [
		'tariff_id' => 'int',
		'market_id' => 'int',
		'tariff_period_id' => 'int',
		'is_extended' => 'bool'
	];

	protected $dates = [
		'applicable_from',
		'applicable_to',
		'active_from',
		'active_to'
	];

	protected $fillable = [
		'tariff_id',
		'market_id',
		'tariff_period_id',
		'applicable_from',
		'applicable_to',
		'active_from',
		'active_to',
		'is_extended'
	];
}
