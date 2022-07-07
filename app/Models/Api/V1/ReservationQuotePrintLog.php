<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ReservationQuotePrintLog
 * 
 * @property int $reservation_quote_log_id
 * @property int $reservation_quote_id
 * @property string|null $username
 * @property Carbon $process_date
 *
 * @package App\Models
 */
class ReservationQuotePrintLog extends Model
{
	protected $table = 'reservation_quote_print_log';
	protected $primaryKey = 'reservation_quote_log_id';
	public $timestamps = false;

	protected $casts = [
		'reservation_quote_id' => 'int'
	];

	protected $dates = [
		'process_date'
	];

	protected $fillable = [
		'reservation_quote_id',
		'username',
		'process_date'
	];
}
