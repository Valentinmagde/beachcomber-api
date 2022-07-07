<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AgencyContact
 * 
 * @property int $agency_contact_id
 * @property int|null $agency_id
 * @property string|null $contact_surname
 * @property string|null $contact_othername
 * @property string|null $contact_phone
 * @property string|null $contact_email
 * @property string|null $contact_mobile
 *
 * @package App\Models
 */
class AgencyContact extends Model
{
	protected $table = 'agency_contact';
	protected $primaryKey = 'agency_contact_id';
	public $timestamps = false;

	protected $casts = [
		'agency_id' => 'int'
	];

	protected $fillable = [
		'agency_id',
		'contact_surname',
		'contact_othername',
		'contact_phone',
		'contact_email',
		'contact_mobile'
	];
}
