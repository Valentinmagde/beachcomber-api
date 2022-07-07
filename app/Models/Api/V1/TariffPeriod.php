<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TariffPeriod
 * 
 * @property int $tariff_period_id
 * @property string $period_name
 * @property float $yearly_budget
 * @property float $weekly_budget
 * @property float $monthly_budget
 * @property string $currency
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 * @property int $active
 *
 * @package App\Models
 */
class TariffPeriod extends Model
{
	protected $table = 'tariff_period';
	protected $primaryKey = 'tariff_period_id';
	public $timestamps = false;

	protected $casts = [
		'yearly_budget' => 'float',
		'weekly_budget' => 'float',
		'monthly_budget' => 'float',
		'active' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'period_name',
		'yearly_budget',
		'weekly_budget',
		'monthly_budget',
		'currency',
		'valid_from',
		'valid_to',
		'active'
	];
}
