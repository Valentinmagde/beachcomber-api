<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContactReasonDescription
 * 
 * @property int $contact_reason_desc_id
 * @property int|null $contact_reason_id
 * @property int|null $language_id
 * @property string|null $name
 *
 * @package App\Models
 */
class ContactReasonDescription extends Model
{
	protected $table = 'contact_reason_description';
	protected $primaryKey = 'contact_reason_desc_id';
	public $timestamps = false;

	protected $casts = [
		'contact_reason_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'contact_reason_id',
		'language_id',
		'name'
	];
}
