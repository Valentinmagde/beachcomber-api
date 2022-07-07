<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ResellerOld
 * 
 * @property int $id
 * @property string $company
 * @property string|null $crs_name
 * @property string|null $contact
 * @property string|null $address
 * @property string|null $address2
 * @property string|null $other
 * @property string|null $city
 * @property string|null $pcode
 * @property string $phone
 * @property string|null $fax
 * @property string|null $email
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
 * @property string|null $comments
 * @property int $year_id
 * @property int $reseller_id
 * @property int $based_on_id
 * @property int $active
 *
 * @package App\Models
 */
class ResellerOld extends Model
{
	protected $table = 'reseller_old';
	public $timestamps = false;

	protected $casts = [
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
		'active' => 'int'
	];

	protected $fillable = [
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
		'comments',
		'year_id',
		'reseller_id',
		'based_on_id',
		'active'
	];
}
