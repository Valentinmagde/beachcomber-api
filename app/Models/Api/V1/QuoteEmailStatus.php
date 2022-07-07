<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class QuoteEmailStatus
 * 
 * @property int $quote_email_status_id
 * @property int $quote_history_id
 * @property string $email_status
 * @property int $email_status_code
 * @property int $sending_country
 * @property int|null $recipient_country
 * @property int $reading_country
 * @property Carbon $status_timestamp
 *
 * @package App\Models
 */
class QuoteEmailStatus extends Model
{
	protected $table = 'quote_email_status';
	protected $primaryKey = 'quote_email_status_id';
	public $timestamps = false;

	protected $casts = [
		'quote_history_id' => 'int',
		'email_status_code' => 'int',
		'sending_country' => 'int',
		'recipient_country' => 'int',
		'reading_country' => 'int'
	];

	protected $dates = [
		'status_timestamp'
	];

	protected $fillable = [
		'quote_history_id',
		'email_status',
		'email_status_code',
		'sending_country',
		'recipient_country',
		'reading_country',
		'status_timestamp'
	];
}
