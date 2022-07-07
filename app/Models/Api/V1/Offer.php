<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Offer
 * 
 * @property int $id
 * @property int $offer_id
 * @property int $offer_type_id
 * @property string $offer_type
 * @property int $client_type_id
 * @property string $client_type
 * @property int $hotel_id
 * @property int $rebate_type_id
 * @property string $rebate_type
 * @property int $currency_id
 * @property string $currency
 * @property float $rebate_value
 * @property float $child_rebate_value
 * @property float $teen_rebate_value
 * @property float $adult_sharing_rebate_value
 * @property float $child_sharing_rebate_value
 * @property float $teen_sharing_rebate_value
 * @property float $infant_sharing_rebate_value
 * @property float $adult
 * @property float $child
 * @property float $teen
 * @property int $offer_for
 * @property int $offer_specific_room
 * @property int $offer_on_package
 * @property int $offer_on_rate
 * @property bool $offer_has_supplement
 * @property string $same_as_season_type
 * @property int $same_as_room_id
 * @property int|null $same_as_rate_type_id
 * @property string|null $same_as_rate_type
 * @property int|null $allotment_from
 * @property int|null $allotment_to
 * @property int $rm_offer_id
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 * @property int $tariff_period_id
 * @property Carbon|null $applicable_from
 * @property Carbon|null $applicable_to
 * @property Carbon|null $active_from
 * @property Carbon|null $active_to
 * @property bool $is_extended
 *
 * @package App\Models
 */
class Offer extends Model
{
	protected $table = 'offer';
	public $timestamps = false;

	protected $casts = [
		'offer_id' => 'int',
		'offer_type_id' => 'int',
		'client_type_id' => 'int',
		'hotel_id' => 'int',
		'rebate_type_id' => 'int',
		'currency_id' => 'int',
		'rebate_value' => 'float',
		'child_rebate_value' => 'float',
		'teen_rebate_value' => 'float',
		'adult_sharing_rebate_value' => 'float',
		'child_sharing_rebate_value' => 'float',
		'teen_sharing_rebate_value' => 'float',
		'infant_sharing_rebate_value' => 'float',
		'adult' => 'float',
		'child' => 'float',
		'teen' => 'float',
		'offer_for' => 'int',
		'offer_specific_room' => 'int',
		'offer_on_package' => 'int',
		'offer_on_rate' => 'int',
		'offer_has_supplement' => 'bool',
		'same_as_room_id' => 'int',
		'same_as_rate_type_id' => 'int',
		'allotment_from' => 'int',
		'allotment_to' => 'int',
		'rm_offer_id' => 'int',
		'tariff_period_id' => 'int',
		'is_extended' => 'bool'
	];

	protected $dates = [
		'valid_from',
		'valid_to',
		'applicable_from',
		'applicable_to',
		'active_from',
		'active_to'
	];

	protected $fillable = [
		'offer_id',
		'offer_type_id',
		'offer_type',
		'client_type_id',
		'client_type',
		'hotel_id',
		'rebate_type_id',
		'rebate_type',
		'currency_id',
		'currency',
		'rebate_value',
		'child_rebate_value',
		'teen_rebate_value',
		'adult_sharing_rebate_value',
		'child_sharing_rebate_value',
		'teen_sharing_rebate_value',
		'infant_sharing_rebate_value',
		'adult',
		'child',
		'teen',
		'offer_for',
		'offer_specific_room',
		'offer_on_package',
		'offer_on_rate',
		'offer_has_supplement',
		'same_as_season_type',
		'same_as_room_id',
		'same_as_rate_type_id',
		'same_as_rate_type',
		'allotment_from',
		'allotment_to',
		'rm_offer_id',
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
