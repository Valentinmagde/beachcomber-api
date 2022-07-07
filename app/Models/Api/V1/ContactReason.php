<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ContactReason
 * 
 * @property int $contact_reason_id
 * @property string|null $contact_reason_name
 * @property int|null $constant_id
 * @property string|null $email
 * @property Carbon|null $valid_from
 * @property Carbon|null $valid_to
 *
 * @package App\Models
 */
class ContactReason extends Model
{
	protected $table = 'contact_reason';
	protected $primaryKey = 'contact_reason_id';
	public $timestamps = false;

	protected $casts = [
		'constant_id' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'contact_reason_name',
		'constant_id',
		'email',
		'valid_from',
		'valid_to'
	];
}
