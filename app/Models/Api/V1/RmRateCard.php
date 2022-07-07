<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RmRateCard
 * 
 * @property int $id
 * @property string|null $name
 * @property string $printed_name
 * @property int $year_id
 * @property int|null $hotel_id
 * @property int|null $currency_id
 * @property int|null $market_id
 * @property int|null $source_id
 * @property int|null $rate_group_id
 * @property int $season_id
 * @property int $child_condition_id
 * @property int $package_id
 * @property int $meal_rate_card_id
 * @property Carbon|null $date_issued
 * @property Carbon|null $date_released
 * @property int $released
 * @property int $duplicated_from_id
 * @property int $duplicated_option
 * @property float $duplicated_value
 * @property string $note
 * @property string $grid_manip_log
 * @property string $log
 * @property int $exported
 * @property Carbon $exported_date
 * @property int|null $active
 *
 * @package App\Models
 */
class RmRateCard extends Model
{
	protected $table = 'rm_rate_card';
	public $timestamps = false;

	protected $casts = [
		'year_id' => 'int',
		'hotel_id' => 'int',
		'currency_id' => 'int',
		'market_id' => 'int',
		'source_id' => 'int',
		'rate_group_id' => 'int',
		'season_id' => 'int',
		'child_condition_id' => 'int',
		'package_id' => 'int',
		'meal_rate_card_id' => 'int',
		'released' => 'int',
		'duplicated_from_id' => 'int',
		'duplicated_option' => 'int',
		'duplicated_value' => 'float',
		'exported' => 'int',
		'active' => 'int'
	];

	protected $dates = [
		'date_issued',
		'date_released',
		'exported_date'
	];

	protected $fillable = [
		'name',
		'printed_name',
		'year_id',
		'hotel_id',
		'currency_id',
		'market_id',
		'source_id',
		'rate_group_id',
		'season_id',
		'child_condition_id',
		'package_id',
		'meal_rate_card_id',
		'date_issued',
		'date_released',
		'released',
		'duplicated_from_id',
		'duplicated_option',
		'duplicated_value',
		'note',
		'grid_manip_log',
		'log',
		'exported',
		'exported_date',
		'active'
	];
}
