<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class GroundHandler
 * 
 * @property int $ground_handler_id
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
 * @property string|null $resa_email
 * @property string|null $resa_cc_email
 * @property int|null $country_id
 * @property string|null $debtor_code
 * @property string $pms_code
 * @property string|null $hms_code
 * @property string|null $comments
 * @property int $active
 * @property int|null $city_id
 *
 * @package App\Models
 */
class GroundHandler extends Model
{
	protected $table = 'ground_handler';
	protected $primaryKey = 'ground_handler_id';
	public $timestamps = false;

	protected $casts = [
		'country_id' => 'int',
		'active' => 'int',
		'city_id' => 'int'
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
		'resa_email',
		'resa_cc_email',
		'country_id',
		'debtor_code',
		'pms_code',
		'hms_code',
		'comments',
		'active',
		'city_id'
	];
}
