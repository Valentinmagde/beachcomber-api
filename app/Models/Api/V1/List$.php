<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class List$
 * 
 * @property string|null $customer_id
 * @property string|null $live_crs_customer_id
 * @property string|null $local_crs_customer_id
 * @property int|null $gender_id
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
 * @property int|null $country_id
 * @property string|null $country
 * @property string|null $address
 * @property string|null $postal_code
 * @property string|null $town
 * @property int|null $language_id
 * @property int|null $vip_level_id
 * @property string|null $vip_level
 * @property string|null $is_industry_partner
 * @property string|null $is_travel_agent
 * @property string|null $dob
 * @property Carbon|null $date_of_birth
 * @property string|null $is_regular_guest
 * @property string|null $allergy_remarks
 * @property string|null $handicap_remarks
 * @property string|null $celebrity_remarks
 * @property string|null $pms_customer_id
 * @property int|null $hms_customer_id
 * @property int|null $active
 * @property string|null $valid_from
 * @property string|null $valid_to
 *
 * @package App\Models
 */
class List$ extends Model
{
	protected $table = 'list$';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'gender_id' => 'int',
		'country_id' => 'int',
		'language_id' => 'int',
		'vip_level_id' => 'int',
		'hms_customer_id' => 'int',
		'active' => 'int'
	];

	protected $dates = [
		'date_of_birth'
	];

	protected $fillable = [
		'customer_id',
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
		'country',
		'address',
		'postal_code',
		'town',
		'language_id',
		'vip_level_id',
		'vip_level',
		'is_industry_partner',
		'is_travel_agent',
		'dob',
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
