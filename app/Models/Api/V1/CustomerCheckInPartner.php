<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CustomerCheckInPartner
 * 
 * @property int $customer_ci_partner_id
 * @property string|null $resa_no
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $nationality
 * @property string|null $passport_no
 * @property string|null $dob
 * @property string|null $email
 * @property string|null $allergy
 *
 * @package App\Models
 */
class CustomerCheckInPartner extends Model
{
	protected $table = 'customer_check_in_partner';
	protected $primaryKey = 'customer_ci_partner_id';
	public $timestamps = false;

	protected $fillable = [
		'resa_no',
		'first_name',
		'last_name',
		'nationality',
		'passport_no',
		'dob',
		'email',
		'allergy'
	];
}
