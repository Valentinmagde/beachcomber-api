<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RateStrategyAgency
 * 
 * @property int $agency_rate_strategy_id
 * @property int|null $hotel_id
 * @property int|null $agency_id
 * @property int $client_type_id
 * @property int|null $rate_strategy_id
 * @property int|null $tariff_period_id
 * @property Carbon|null $applicable_from
 * @property Carbon|null $applicable_to
 * @property Carbon|null $active_from
 * @property Carbon|null $active_to
 *
 * @package App\Models
 */
class RateStrategyAgency extends Model
{
	protected $table = 'rate_strategy_agency';
	protected $primaryKey = 'agency_rate_strategy_id';
	public $timestamps = false;

	protected $casts = [
		'hotel_id' => 'int',
		'agency_id' => 'int',
		'client_type_id' => 'int',
		'rate_strategy_id' => 'int',
		'tariff_period_id' => 'int'
	];

	protected $dates = [
		'applicable_from',
		'applicable_to',
		'active_from',
		'active_to'
	];

	protected $fillable = [
		'hotel_id',
		'agency_id',
		'client_type_id',
		'rate_strategy_id',
		'tariff_period_id',
		'applicable_from',
		'applicable_to',
		'active_from',
		'active_to'
	];
}
