<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelPackageRmMealRateCard
 * 
 * @property int $id
 * @property int $year_id
 * @property int $hotel_id
 * @property string $name
 * @property string $printed_name
 * @property string $description
 * @property int $currency_id
 * @property int $source_id
 * @property int $rate_card_id
 * @property int $child_age0_id
 * @property int $child_age1_id
 * @property int $child_age2_id
 * @property int $teen_same_as_child
 * @property int $version
 * @property string|null $log
 * @property Carbon|null $date_issued
 * @property bool $released
 * @property bool $verified
 * @property int $duplicated_from_id
 * @property string|null $duplicated_option
 * @property string|null $duplicated_value
 * @property Carbon|null $deleted_date
 * @property string|null $deleted_username
 * @property Carbon $last_modified
 * @property int $exported
 * @property Carbon|null $exported_date
 * @property string|null $exported_username
 * @property int $exported_test
 * @property Carbon|null $exported_date_test
 * @property string|null $exported_test_username
 * @property int $exported_cloud
 * @property Carbon|null $exported_date_cloud
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
class HotelPackageRmMealRateCard extends Model
{
	protected $table = 'hotel_package_rm_meal_rate_card';
	public $timestamps = false;

	protected $casts = [
		'year_id' => 'int',
		'hotel_id' => 'int',
		'currency_id' => 'int',
		'source_id' => 'int',
		'rate_card_id' => 'int',
		'child_age0_id' => 'int',
		'child_age1_id' => 'int',
		'child_age2_id' => 'int',
		'teen_same_as_child' => 'int',
		'version' => 'int',
		'released' => 'bool',
		'verified' => 'bool',
		'duplicated_from_id' => 'int',
		'exported' => 'int',
		'exported_test' => 'int',
		'exported_cloud' => 'int',
		'active' => 'int',
		'extended_test' => 'int',
		'extended' => 'int',
		'extended_cloud' => 'int'
	];

	protected $dates = [
		'date_issued',
		'deleted_date',
		'last_modified',
		'exported_date',
		'exported_date_test',
		'exported_date_cloud',
		'extended_date_test',
		'extended_date',
		'extended_date_cloud'
	];

	protected $fillable = [
		'year_id',
		'hotel_id',
		'name',
		'printed_name',
		'description',
		'currency_id',
		'source_id',
		'rate_card_id',
		'child_age0_id',
		'child_age1_id',
		'child_age2_id',
		'teen_same_as_child',
		'version',
		'log',
		'date_issued',
		'released',
		'verified',
		'duplicated_from_id',
		'duplicated_option',
		'duplicated_value',
		'deleted_date',
		'deleted_username',
		'last_modified',
		'exported',
		'exported_date',
		'exported_username',
		'exported_test',
		'exported_date_test',
		'exported_test_username',
		'exported_cloud',
		'exported_date_cloud',
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
