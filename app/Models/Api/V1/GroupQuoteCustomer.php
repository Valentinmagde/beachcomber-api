<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class GroupQuoteCustomer
 * 
 * @property float $group_customer_id
 * @property string|null $title
 * @property string|null $surname
 * @property string|null $othername
 * @property string|null $email
 * @property string|null $phone_country_code
 * @property string|null $phone
 * @property string|null $mobile_country_code
 * @property string|null $mobile
 * @property string|null $fax
 * @property float|null $country_id
 * @property string|null $country
 * @property string|null $address
 * @property string|null $postal_code
 * @property string|null $town
 * @property float|null $language_id
 * @property int|null $is_industry_partner
 * @property int|null $is_travel_agent
 * @property int|null $active
 * @property Carbon|null $valid_from
 * @property Carbon|null $valid_to
 *
 * @package App\Models
 */
class GroupQuoteCustomer extends Model
{
	protected $table = 'group_quote_customer';
	protected $primaryKey = 'group_customer_id';
	public $timestamps = false;

	protected $casts = [
		'country_id' => 'float',
		'language_id' => 'float',
		'is_industry_partner' => 'int',
		'is_travel_agent' => 'int',
		'active' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'title',
		'surname',
		'othername',
		'email',
		'phone_country_code',
		'phone',
		'mobile_country_code',
		'mobile',
		'fax',
		'country_id',
		'country',
		'address',
		'postal_code',
		'town',
		'language_id',
		'is_industry_partner',
		'is_travel_agent',
		'active',
		'valid_from',
		'valid_to'
	];
}
