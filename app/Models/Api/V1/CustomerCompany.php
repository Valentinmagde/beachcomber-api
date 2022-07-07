<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CustomerCompany
 * 
 * @property int $customer_company_id
 * @property int $customer_id
 * @property string $company_position
 * @property string $company_name
 * @property string $company_type
 * @property string $company_director_surname
 * @property string $company_director_firstname
 * @property string $company_director_email
 * @property string $company_code
 * @property string $company_street
 * @property string $company_country
 * @property string $company_phone
 * @property string $company_fax
 * @property string $company_email
 * @property string $company_website
 *
 * @package App\Models
 */
class CustomerCompany extends Model
{
	protected $table = 'customer_company';
	protected $primaryKey = 'customer_company_id';
	public $timestamps = false;

	protected $casts = [
		'customer_id' => 'int'
	];

	protected $fillable = [
		'customer_id',
		'company_position',
		'company_name',
		'company_type',
		'company_director_surname',
		'company_director_firstname',
		'company_director_email',
		'company_code',
		'company_street',
		'company_country',
		'company_phone',
		'company_fax',
		'company_email',
		'company_website'
	];
}
