<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CustomerCheckIn
 * 
 * @property int $customer_ci_id
 * @property string|null $resa_no
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $room_no
 * @property string|null $address
 * @property string|null $city
 * @property string|null $email
 * @property string|null $country
 * @property string|null $tel
 * @property string|null $mobile
 * @property string|null $code_postal
 * @property string|null $fax
 * @property string|null $nationality
 * @property string|null $passport_no
 * @property string|null $dob
 * @property string|null $profession
 * @property string|null $addult
 * @property string|null $child
 * @property string|null $arr_date
 * @property string|null $dep_date
 * @property string|null $travel_partners
 * @property string|null $comments
 * @property string|null $allergy
 *
 * @package App\Models
 */
class CustomerCheckIn extends Model
{
	protected $table = 'customer_check_in';
	protected $primaryKey = 'customer_ci_id';
	public $timestamps = false;

	protected $fillable = [
		'resa_no',
		'first_name',
		'last_name',
		'room_no',
		'address',
		'city',
		'email',
		'country',
		'tel',
		'mobile',
		'code_postal',
		'fax',
		'nationality',
		'passport_no',
		'dob',
		'profession',
		'addult',
		'child',
		'arr_date',
		'dep_date',
		'travel_partners',
		'comments',
		'allergy'
	];
}
