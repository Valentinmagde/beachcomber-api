<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelPackage
 * 
 * @property int $hotel_package_id
 * @property int $package_id
 * @property int $hotel_id
 * @property string $client_type
 * @property int $client_type_id
 * @property int $no_pax
 * @property float $adult
 * @property float $child
 * @property float $teen
 * @property float $adult_sharing
 * @property float $child_sharing
 * @property float $teen_sharing
 * @property float $adult_cost
 * @property float $child_cost
 * @property float $teen_cost
 * @property float $adult_sharing_cost
 * @property float $child_sharing_cost
 * @property float $teen_sharing_cost
 * @property string $currency
 * @property int $package_for
 * @property int $package_specific_room
 * @property int $has_pre_requisite
 * @property int $pre_requisite_id
 * @property string $tariff_type
 * @property int $tariff_type_id
 * @property bool $has_supplement
 * @property int $rm_meal_rate_id
 * @property string $hms_code
 * @property Carbon $validity_from
 * @property Carbon $validity_to
 * @property Carbon|null $valid_from
 * @property Carbon|null $valid_to
 * @property int $tariff_period_id
 * @property Carbon|null $applicable_from
 * @property Carbon|null $applicable_to
 * @property Carbon|null $active_from
 * @property Carbon|null $active_to
 * @property bool $is_extended
 *
 * @package App\Models
 */
class HotelPackage extends Model
{
	protected $table = 'hotel_package';
	protected $primaryKey = 'hotel_package_id';
	public $timestamps = false;

	protected $casts = [
		'package_id' => 'int',
		'hotel_id' => 'int',
		'client_type_id' => 'int',
		'no_pax' => 'int',
		'adult' => 'float',
		'child' => 'float',
		'teen' => 'float',
		'adult_sharing' => 'float',
		'child_sharing' => 'float',
		'teen_sharing' => 'float',
		'adult_cost' => 'float',
		'child_cost' => 'float',
		'teen_cost' => 'float',
		'adult_sharing_cost' => 'float',
		'child_sharing_cost' => 'float',
		'teen_sharing_cost' => 'float',
		'package_for' => 'int',
		'package_specific_room' => 'int',
		'has_pre_requisite' => 'int',
		'pre_requisite_id' => 'int',
		'tariff_type_id' => 'int',
		'has_supplement' => 'bool',
		'rm_meal_rate_id' => 'int',
		'tariff_period_id' => 'int',
		'is_extended' => 'bool'
	];

	protected $dates = [
		'validity_from',
		'validity_to',
		'valid_from',
		'valid_to',
		'applicable_from',
		'applicable_to',
		'active_from',
		'active_to'
	];

	protected $fillable = [
		'package_id',
		'hotel_id',
		'client_type',
		'client_type_id',
		'no_pax',
		'adult',
		'child',
		'teen',
		'adult_sharing',
		'child_sharing',
		'teen_sharing',
		'adult_cost',
		'child_cost',
		'teen_cost',
		'adult_sharing_cost',
		'child_sharing_cost',
		'teen_sharing_cost',
		'currency',
		'package_for',
		'package_specific_room',
		'has_pre_requisite',
		'pre_requisite_id',
		'tariff_type',
		'tariff_type_id',
		'has_supplement',
		'rm_meal_rate_id',
		'hms_code',
		'validity_from',
		'validity_to',
		'valid_from',
		'valid_to',
		'tariff_period_id',
		'applicable_from',
		'applicable_to',
		'active_from',
		'active_to',
		'is_extended'
	];
}
