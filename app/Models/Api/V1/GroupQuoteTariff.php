<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class GroupQuoteTariff
 * 
 * @property float|null $id
 * @property float|null $tariff_id
 * @property int|null $tariff_type_id
 * @property string|null $tariff_type
 * @property int|null $tariff_category_id
 * @property string|null $tariff_category
 * @property int|null $tariff_occupancy_id
 * @property string|null $tariff_occupancy
 * @property int|null $meal_plan_id
 * @property string|null $meal_plan
 * @property int|null $room_id
 * @property int|null $currency_id
 * @property string|null $currency
 * @property float|null $adult
 * @property float|null $child
 * @property float|null $teen
 * @property float|null $adult_sharing
 * @property float|null $child_sharing
 * @property float|null $teen_sharing
 * @property float|null $adult_meal_supplement
 * @property float|null $child_meal_supplement
 * @property float|null $teen_meal_supplement
 * @property string|null $baby_cot_payable
 * @property float|null $baby_cot
 * @property int|null $tariff_for
 * @property Carbon|null $valid_from
 * @property Carbon|null $valid_to
 *
 * @package App\Models
 */
class GroupQuoteTariff extends Model
{
	protected $table = 'group_quote_tariff';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'float',
		'tariff_id' => 'float',
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
		'tariff_for' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'id',
		'tariff_id',
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
		'valid_from',
		'valid_to'
	];
}
