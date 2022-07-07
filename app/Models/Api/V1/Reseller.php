<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Reseller
 * 
 * @property int $id
 * @property int $rm_reseller_id
 * @property string $company
 * @property string|null $crs_name
 * @property string|null $contact
 * @property string|null $address
 * @property string|null $address2
 * @property string|null $other
 * @property string|null $city
 * @property string|null $pcode
 * @property string|null $phone
 * @property string|null $fax
 * @property string|null $email
 * @property string|null $resa_email
 * @property string|null $resa_cc_email
 * @property int|null $days
 * @property int|null $type_id
 * @property int|null $market_id
 * @property int|null $country_id
 * @property int|null $language_id
 * @property int|null $payment_type_id
 * @property int|null $account_id
 * @property int|null $currency_id
 * @property int|null $ground_handler_id
 * @property int $rate_group_id
 * @property int|null $allot_group_id
 * @property string|null $debtor_code
 * @property string $pms_code
 * @property string|null $hms_code
 * @property string|null $comments
 * @property int $year_id
 * @property int $reseller_id
 * @property int $based_on_id
 * @property int $active
 * @property string|null $country
 * @property string|null $region
 * @property int|null $region_id
 * @property int|null $city_id
 * @property string|null $website
 * @property string|null $vat_number
 * @property string|null $brn
 * @property string|null $payment_mode
 * @property int|null $representative_id
 * @property string|null $representative
 * @property int|null $iscontracted
 * @property int $is_ground_handler
 * @property int $enable
 * @property int|null $paid_by_id
 * @property int|null $exported_cloud
 * @property string|null $exported_cloud_username
 * @property Carbon|null $exported_date_cloud
 * @property int|null $exported_test
 * @property string|null $exported_test_username
 * @property Carbon|null $exported_date_test
 *
 * @package App\Models
 */
class Reseller extends Model
{
	protected $table = 'reseller';
	public $timestamps = false;

	protected $casts = [
		'rm_reseller_id' => 'int',
		'days' => 'int',
		'type_id' => 'int',
		'market_id' => 'int',
		'country_id' => 'int',
		'language_id' => 'int',
		'payment_type_id' => 'int',
		'account_id' => 'int',
		'currency_id' => 'int',
		'ground_handler_id' => 'int',
		'rate_group_id' => 'int',
		'allot_group_id' => 'int',
		'year_id' => 'int',
		'reseller_id' => 'int',
		'based_on_id' => 'int',
		'active' => 'int',
		'region_id' => 'int',
		'city_id' => 'int',
		'representative_id' => 'int',
		'iscontracted' => 'int',
		'is_ground_handler' => 'int',
		'enable' => 'int',
		'paid_by_id' => 'int',
		'exported_cloud' => 'int',
		'exported_test' => 'int'
	];

	protected $dates = [
		'exported_date_cloud',
		'exported_date_test'
	];

	protected $fillable = [
		'rm_reseller_id',
		'company',
		'crs_name',
		'contact',
		'address',
		'address2',
		'other',
		'city',
		'pcode',
		'phone',
		'fax',
		'email',
		'resa_email',
		'resa_cc_email',
		'days',
		'type_id',
		'market_id',
		'country_id',
		'language_id',
		'payment_type_id',
		'account_id',
		'currency_id',
		'ground_handler_id',
		'rate_group_id',
		'allot_group_id',
		'debtor_code',
		'pms_code',
		'hms_code',
		'comments',
		'year_id',
		'reseller_id',
		'based_on_id',
		'active',
		'country',
		'region',
		'region_id',
		'city_id',
		'website',
		'vat_number',
		'brn',
		'payment_mode',
		'representative_id',
		'representative',
		'iscontracted',
		'is_ground_handler',
		'enable',
		'paid_by_id',
		'exported_cloud',
		'exported_cloud_username',
		'exported_date_cloud',
		'exported_test',
		'exported_test_username',
		'exported_date_test'
	];
}
