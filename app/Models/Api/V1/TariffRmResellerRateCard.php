<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TariffRmResellerRateCard
 * 
 * @property int $id
 * @property int $reseller_id
 * @property int $rate_card_id
 * @property Carbon $assigned_date
 * @property Carbon $applicable_date
 * @property Carbon|null $applicable_from
 * @property Carbon|null $applicable_to
 * @property Carbon|null $active_from
 * @property Carbon|null $active_to
 *
 * @package App\Models
 */
class TariffRmResellerRateCard extends Model
{
	protected $table = 'tariff_rm_reseller_rate_card';
	public $timestamps = false;

	protected $casts = [
		'reseller_id' => 'int',
		'rate_card_id' => 'int'
	];

	protected $dates = [
		'assigned_date',
		'applicable_date',
		'applicable_from',
		'applicable_to',
		'active_from',
		'active_to'
	];

	protected $fillable = [
		'reseller_id',
		'rate_card_id',
		'assigned_date',
		'applicable_date',
		'applicable_from',
		'applicable_to',
		'active_from',
		'active_to'
	];
}
