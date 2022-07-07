<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class OlTariff
 * 
 * @property int $tariff_id
 * @property int $tariff_type_id
 * @property string|null $tariff_type
 * @property int $tariff_category_id
 * @property string $tariff_category
 * @property int $tariff_occupancy_id
 * @property string $tariff_occupancy
 * @property int $meal_plan_id
 * @property string $meal_plan
 * @property int $room_id
 * @property int $currency_id
 * @property string $currency
 * @property float $adult
 * @property float $child
 * @property float $teen
 * @property float $adult_sharing
 * @property float $child_sharing
 * @property float $teen_sharing
 * @property float $adult_meal_supplement
 * @property float $child_meal_supplement
 * @property float $teen_meal_supplement
 * @property string $baby_cot_payable
 * @property float $baby_cot
 * @property int $tariff_for
 * @property int $rm_rate_card_id
 * @property int $rm_tariff_id
 * @property int $rm_rate_group_id
 * @property string $rm_rate_group
 * @property int $season_id
 * @property int $season_type_id
 * @property string $season_type
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class OlTariff extends Model
{
	protected $table = 'ol_tariff';
	protected $primaryKey = 'tariff_id';
	public $timestamps = false;

	protected $casts = [
		'tariff_type_id' => 'int',
		'tariff_category_id' => 'int',
		'tariff_occupancy_id' => 'int',
		'meal_plan_id' => 'int',
		'room_id' => 'int',
		'currency_id' => 'int',
		'adult' => 'float',
		'child' => 'float',
		'teen' => 'float',
		'adult_sharing' => 'float',
		'child_sharing' => 'float',
		'teen_sharing' => 'float',
		'adult_meal_supplement' => 'float',
		'child_meal_supplement' => 'float',
		'teen_meal_supplement' => 'float',
		'baby_cot' => 'float',
		'tariff_for' => 'int',
		'rm_rate_card_id' => 'int',
		'rm_tariff_id' => 'int',
		'rm_rate_group_id' => 'int',
		'season_id' => 'int',
		'season_type_id' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'tariff_type_id',
		'tariff_type',
		'tariff_category_id',
		'tariff_category',
		'tariff_occupancy_id',
		'tariff_occupancy',
		'meal_plan_id',
		'meal_plan',
		'room_id',
		'currency_id',
		'currency',
		'adult',
		'child',
		'teen',
		'adult_sharing',
		'child_sharing',
		'teen_sharing',
		'adult_meal_supplement',
		'child_meal_supplement',
		'teen_meal_supplement',
		'baby_cot_payable',
		'baby_cot',
		'tariff_for',
		'rm_rate_card_id',
		'rm_tariff_id',
		'rm_rate_group_id',
		'rm_rate_group',
		'season_id',
		'season_type_id',
		'season_type',
		'valid_from',
		'valid_to'
	];
}
