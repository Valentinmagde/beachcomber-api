<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TariffRateCard
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
 * @property int $rate_strategy_id
 * @property int $season_id
 * @property int $child_condition_id
 * @property int $package_id
 * @property int $meal_rate_card_id
 * @property Carbon|null $date_issued
 * @property Carbon|null $date_released
 * @property int $released
 * @property int $verified
 * @property int $duplicated_from_id
 * @property int $duplicated_option
 * @property float $duplicated_value
 * @property float $rate_multiplier
 * @property string|null $note
 * @property string|null $grid_manip_log
 * @property string|null $log
 * @property int $exported
 * @property Carbon $exported_date
 * @property Carbon|null $deleted_date
 * @property string|null $exported_username
 * @property Carbon|null $exported_deleted_date
 * @property string|null $exported_deleted_username
 * @property Carbon|null $exported_date_test
 * @property Carbon|null $exported_deleted_date_test
 * @property int $exported_test
 * @property string|null $exported_test_username
 * @property string|null $exported_deleted_test_username
 * @property int $exported_cloud
 * @property Carbon|null $exported_date_cloud
 * @property string|null $exported_cloud_username
 * @property int|null $active
 *
 * @package App\Models
 */
class TariffRateCard extends Model
{
	protected $table = 'tariff_rate_card';
	public $timestamps = false;

	protected $casts = [
		'year_id' => 'int',
		'hotel_id' => 'int',
		'currency_id' => 'int',
		'market_id' => 'int',
		'source_id' => 'int',
		'rate_group_id' => 'int',
		'rate_strategy_id' => 'int',
		'season_id' => 'int',
		'child_condition_id' => 'int',
		'package_id' => 'int',
		'meal_rate_card_id' => 'int',
		'released' => 'int',
		'verified' => 'int',
		'duplicated_from_id' => 'int',
		'duplicated_option' => 'int',
		'duplicated_value' => 'float',
		'rate_multiplier' => 'float',
		'exported' => 'int',
		'exported_test' => 'int',
		'exported_cloud' => 'int',
		'active' => 'int'
	];

	protected $dates = [
		'date_issued',
		'date_released',
		'exported_date',
		'deleted_date',
		'exported_deleted_date',
		'exported_date_test',
		'exported_deleted_date_test',
		'exported_date_cloud'
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
		'rate_strategy_id',
		'season_id',
		'child_condition_id',
		'package_id',
		'meal_rate_card_id',
		'date_issued',
		'date_released',
		'released',
		'verified',
		'duplicated_from_id',
		'duplicated_option',
		'duplicated_value',
		'rate_multiplier',
		'note',
		'grid_manip_log',
		'log',
		'exported',
		'exported_date',
		'deleted_date',
		'exported_username',
		'exported_deleted_date',
		'exported_deleted_username',
		'exported_date_test',
		'exported_deleted_date_test',
		'exported_test',
		'exported_test_username',
		'exported_deleted_test_username',
		'exported_cloud',
		'exported_date_cloud',
		'exported_cloud_username',
		'active'
	];
}
