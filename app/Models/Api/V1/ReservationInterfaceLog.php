<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ReservationInterfaceLog
 * 
 * @property int $process_id
 * @property int|null $reservation_id
 * @property Carbon $process_for_business_date
 * @property string $process_step_name
 * @property string $process_step_message
 * @property Carbon $process_step_timestamp
 *
 * @package App\Models
 */
class ReservationInterfaceLog extends Model
{
	protected $table = 'reservation_interface_log';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'process_id' => 'int',
		'reservation_id' => 'int'
	];

	protected $dates = [
		'process_for_business_date',
		'process_step_timestamp'
	];

	protected $fillable = [
		'process_id',
		'reservation_id',
		'process_for_business_date',
		'process_step_name',
		'process_step_message',
		'process_step_timestamp'
	];
}
