<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ReservationQuoteMailLog
 * 
 * @property int $reservation_quote_mail_id
 * @property int $reservation_quote_id
 * @property string $agent_username
 * @property string $recipient_email
 * @property string|null $subject
 * @property string|null $attach_file_path
 * @property Carbon|null $process_date
 *
 * @package App\Models
 */
class ReservationQuoteMailLog extends Model
{
	protected $table = 'reservation_quote_mail_log';
	protected $primaryKey = 'reservation_quote_mail_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'reservation_quote_mail_id' => 'int',
		'reservation_quote_id' => 'int'
	];

	protected $dates = [
		'process_date'
	];

	protected $fillable = [
		'reservation_quote_id',
		'agent_username',
		'recipient_email',
		'subject',
		'attach_file_path',
		'process_date'
	];
}
