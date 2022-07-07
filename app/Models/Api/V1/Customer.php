<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Customer
 * 
 * @property int $customer_id
 * @property int $live_crs_customer_id
 * @property int $local_crs_customer_id
 * @property int $gender_id
 * @property string $gender
 * @property int $title_id
 * @property string $title
 * @property string $surname
 * @property string $othername
 * @property string $email
 * @property string $phone_country_code
 * @property string $phone
 * @property string $mobile_country_code
 * @property string $mobile
 * @property string $fax
 * @property int $country_id
 * @property string $country
 * @property int $nationality_country_id
 * @property string $nationality_country
 * @property string $address
 * @property string $postal_code
 * @property string $town
 * @property int $language_id
 * @property int $vip_level_id
 * @property string $vip_level
 * @property int $is_industry_partner
 * @property int $is_travel_agent
 * @property Carbon $date_of_birth
 * @property int $is_regular_guest
 * @property string $allergy_remarks
 * @property string $handicap_remarks
 * @property string $celebrity_remarks
 * @property string $pms_customer_id
 * @property string $hms_customer_id
 * @property int $active
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class Customer extends Model
{
	protected $table = 'customer';
	protected $primaryKey = 'customer_id';
	public $timestamps = false;

	protected $casts = [
		'live_crs_customer_id' => 'int',
		'local_crs_customer_id' => 'int',
		'gender_id' => 'int',
		'title_id' => 'int',
		'country_id' => 'int',
		'nationality_country_id' => 'int',
		'language_id' => 'int',
		'vip_level_id' => 'int',
		'is_industry_partner' => 'int',
		'is_travel_agent' => 'int',
		'is_regular_guest' => 'int',
		'active' => 'int'
	];

	protected $dates = [
		'date_of_birth',
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'live_crs_customer_id',
		'local_crs_customer_id',
		'gender_id',
		'gender',
		'title_id',
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
		'nationality_country_id',
		'nationality_country',
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
