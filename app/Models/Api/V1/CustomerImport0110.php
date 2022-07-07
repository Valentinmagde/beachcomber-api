<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CustomerImport0110
 * 
 * @property int $customer_id
 * @property string|null $live_crs_customer_id
 * @property string|null $local_crs_customer_id
 * @property string|null $gender_id
 * @property string|null $gender
 * @property string|null $title
 * @property string|null $surname
 * @property string|null $othername
 * @property string|null $email
 * @property string|null $phone_country_code
 * @property string|null $phone
 * @property string|null $mobile_country_code
 * @property string|null $mobile
 * @property string|null $fax
 * @property string|null $country_id
 * @property string|null $country_code
 * @property string|null $country
 * @property string|null $address
 * @property string|null $postal_code
 * @property string|null $town
 * @property string|null $language_id
 * @property string|null $vip_level_id
 * @property string|null $vip_level
 * @property string|null $is_industry_partner
 * @property string|null $is_travel_agent
 * @property string|null $date_of_birth
 * @property string|null $is_regular_guest
 * @property string|null $allergy_remarks
 * @property string|null $handicap_remarks
 * @property string|null $celebrity_remarks
 * @property string|null $pms_customer_id
 * @property string|null $hms_customer_id
 * @property string|null $active
 * @property string|null $valid_from
 * @property string|null $valid_to
 *
 * @package App\Models
 */
class CustomerImport0110 extends Model
{
	protected $table = 'customer_import_01_10';
	protected $primaryKey = 'customer_id';
	public $timestamps = false;

	protected $fillable = [
		'live_crs_customer_id',
		'local_crs_customer_id',
		'gender_id',
		'gender',
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
		'country_code',
		'country',
		'address',
		'postal_code',
		'town',
		'language_id',
		'vip_level_id',
		'vip_level',
		'is_industry_partner',
		'is_travel_agent',
		'date_of_birth',
		'is_regular_guest',
		'allergy_remarks',
		'handicap_remarks',
		'celebrity_remarks',
		'pms_customer_id',
		'hms_customer_id',
		'active',
		'valid_from',
		'valid_to'
	];
}
