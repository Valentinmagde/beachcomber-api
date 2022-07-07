<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ContactRequestLog
 * 
 * @property int $contact_request_id
 * @property Carbon $contact_request_dateTime
 * @property int $customer_id
 * @property int $contact_reason_id
 * @property string|null $contact_reason
 * @property int|null $contact_hotel_id
 * @property int|null $contact_office_id
 * @property string|null $contact_message
 * @property string|null $contact_outcome
 *
 * @package App\Models
 */
class ContactRequestLog extends Model
{
	protected $table = 'contact_request_log';
	protected $primaryKey = 'contact_request_id';
	public $timestamps = false;

	protected $casts = [
		'customer_id' => 'int',
		'contact_reason_id' => 'int',
		'contact_hotel_id' => 'int',
		'contact_office_id' => 'int'
	];

	protected $dates = [
		'contact_request_dateTime'
	];

	protected $fillable = [
		'contact_request_dateTime',
		'customer_id',
		'contact_reason_id',
		'contact_reason',
		'contact_hotel_id',
		'contact_office_id',
		'contact_message',
		'contact_outcome'
	];
}
