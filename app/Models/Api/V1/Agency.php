<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Agency
 * 
 * @property int $agency_id
 * @property int $agency_type_id
 * @property int $country_id
 * @property string $region
 * @property string $city
 * @property int $region_id
 * @property int $city_id
 * @property string $name
 * @property string $tel
 * @property string $fax
 * @property string $email
 * @property string $address
 * @property string $website
 * @property string $vat_number
 * @property string $brn
 * @property int $payment_mode_id
 * @property string $payment_mode
 * @property int $representative_id
 * @property string $representative
 * @property string $contact_person
 * @property int $reference_agency_id
 * @property bool $is_reference
 * @property string $pms_agency_id
 * @property string $hms_agency_id
 * @property string|null $notes
 * @property int $active
 *
 * @package App\Models
 */
class Agency extends Model
{
	protected $table = 'agency';
	protected $primaryKey = 'agency_id';
	public $timestamps = false;

	protected $casts = [
		'agency_type_id' => 'int',
		'country_id' => 'int',
		'region_id' => 'int',
		'city_id' => 'int',
		'payment_mode_id' => 'int',
		'representative_id' => 'int',
		'reference_agency_id' => 'int',
		'is_reference' => 'bool',
		'active' => 'int'
	];

	protected $fillable = [
		'agency_type_id',
		'country_id',
		'region',
		'city',
		'region_id',
		'city_id',
		'name',
		'tel',
		'fax',
		'email',
		'address',
		'website',
		'vat_number',
		'brn',
		'payment_mode_id',
		'payment_mode',
		'representative_id',
		'representative',
		'contact_person',
		'reference_agency_id',
		'is_reference',
		'pms_agency_id',
		'hms_agency_id',
		'notes',
		'active'
	];
}
