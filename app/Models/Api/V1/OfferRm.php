<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class OfferRm
 * 
 * @property int $id
 * @property int $offer_cat_id
 * @property int $offer_cat2_id
 * @property int $rebate_type_id
 * @property int $year_id
 * @property int $offer_type_id
 * @property string $offer_type_name
 * @property string $code
 * @property string $name
 * @property string $printed_name
 * @property string $description
 * @property int $currency_id
 * @property int $offer_rate_per_id
 * @property float|null $numeric_offer
 * @property float $rebate_value
 * @property int $rebate_at_begining_stay
 * @property float $adult
 * @property float $child
 * @property float $teen
 * @property float $infant
 * @property float $adult_sharing
 * @property float $child_sharing
 * @property float $teen_sharing
 * @property float $infant_sharing
 * @property int $offer_tariff_same_as_room_id
 * @property int $offer_tariff_same_as_season_type_id
 * @property int $offer_tariff_same_as_rate_type_id
 * @property int $offer_allotment_from
 * @property int $offer_allotment_to
 * @property string $gift_description
 * @property int $applicable_on_rates
 * @property int $applicable_on_meals
 * @property int $combinable_all
 * @property int $hotel_id
 * @property Carbon $hotel_date
 * @property int $market_id
 * @property int $country_id
 * @property Carbon $country_date
 * @property int $reseller_id
 * @property Carbon $reseller_date
 * @property Carbon|null $date_issued
 * @property int $printable
 * @property int $released
 * @property bool $verified
 * @property int $duplicate_from_id
 * @property string $note
 * @property string $log
 * @property Carbon|null $last_modified
 * @property int $exported
 * @property Carbon $date_exported
 * @property string|null $exported_username
 * @property int|null $exported_test
 * @property Carbon|null $date_exported_test
 * @property string|null $exported_test_username
 * @property Carbon|null $date_deleted_exported
 * @property int $exported_cloud
 * @property Carbon|null $date_exported_cloud
 * @property string|null $exported_cloud_username
 * @property int $active
 * @property int $extended_test
 * @property Carbon|null $extended_date_test
 * @property string|null $extended_test_username
 * @property int $extended
 * @property Carbon|null $extended_date
 * @property string|null $extended_username
 * @property int $extended_cloud
 * @property Carbon|null $extended_date_cloud
 * @property string|null $extended_cloud_username
 * @property string|null $extended_result_error
 * @property string|null $extended_result_test_error
 * @property string|null $extended_result_cloud_error
 *
 * @package App\Models
 */
class OfferRm extends Model
{
	protected $table = 'offer_rm';
	public $timestamps = false;

	protected $casts = [
		'offer_cat_id' => 'int',
		'offer_cat2_id' => 'int',
		'rebate_type_id' => 'int',
		'year_id' => 'int',
		'offer_type_id' => 'int',
		'currency_id' => 'int',
		'offer_rate_per_id' => 'int',
		'numeric_offer' => 'float',
		'rebate_value' => 'float',
		'rebate_at_begining_stay' => 'int',
		'adult' => 'float',
		'child' => 'float',
		'teen' => 'float',
		'infant' => 'float',
		'adult_sharing' => 'float',
		'child_sharing' => 'float',
		'teen_sharing' => 'float',
		'infant_sharing' => 'float',
		'offer_tariff_same_as_room_id' => 'int',
		'offer_tariff_same_as_season_type_id' => 'int',
		'offer_tariff_same_as_rate_type_id' => 'int',
		'offer_allotment_from' => 'int',
		'offer_allotment_to' => 'int',
		'applicable_on_rates' => 'int',
		'applicable_on_meals' => 'int',
		'combinable_all' => 'int',
		'hotel_id' => 'int',
		'market_id' => 'int',
		'country_id' => 'int',
		'reseller_id' => 'int',
		'printable' => 'int',
		'released' => 'int',
		'verified' => 'bool',
		'duplicate_from_id' => 'int',
		'exported' => 'int',
		'exported_test' => 'int',
		'exported_cloud' => 'int',
		'active' => 'int',
		'extended_test' => 'int',
		'extended' => 'int',
		'extended_cloud' => 'int'
	];

	protected $dates = [
		'hotel_date',
		'country_date',
		'reseller_date',
		'date_issued',
		'last_modified',
		'date_exported',
		'date_exported_test',
		'date_deleted_exported',
		'date_exported_cloud',
		'extended_date_test',
		'extended_date',
		'extended_date_cloud'
	];

	protected $fillable = [
		'offer_cat_id',
		'offer_cat2_id',
		'rebate_type_id',
		'year_id',
		'offer_type_id',
		'offer_type_name',
		'code',
		'name',
		'printed_name',
		'description',
		'currency_id',
		'offer_rate_per_id',
		'numeric_offer',
		'rebate_value',
		'rebate_at_begining_stay',
		'adult',
		'child',
		'teen',
		'infant',
		'adult_sharing',
		'child_sharing',
		'teen_sharing',
		'infant_sharing',
		'offer_tariff_same_as_room_id',
		'offer_tariff_same_as_season_type_id',
		'offer_tariff_same_as_rate_type_id',
		'offer_allotment_from',
		'offer_allotment_to',
		'gift_description',
		'applicable_on_rates',
		'applicable_on_meals',
		'combinable_all',
		'hotel_id',
		'hotel_date',
		'market_id',
		'country_id',
		'country_date',
		'reseller_id',
		'reseller_date',
		'date_issued',
		'printable',
		'released',
		'verified',
		'duplicate_from_id',
		'note',
		'log',
		'last_modified',
		'exported',
		'date_exported',
		'exported_username',
		'exported_test',
		'date_exported_test',
		'exported_test_username',
		'date_deleted_exported',
		'exported_cloud',
		'date_exported_cloud',
		'exported_cloud_username',
		'active',
		'extended_test',
		'extended_date_test',
		'extended_test_username',
		'extended',
		'extended_date',
		'extended_username',
		'extended_cloud',
		'extended_date_cloud',
		'extended_cloud_username',
		'extended_result_error',
		'extended_result_test_error',
		'extended_result_cloud_error'
	];
}
