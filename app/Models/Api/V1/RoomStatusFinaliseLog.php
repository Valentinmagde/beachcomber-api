<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RoomStatusFinaliseLog
 * 
 * @property int $process_id
 * @property Carbon $process_for_business_date
 * @property string $process_message_type
 * @property string $process_step_name
 * @property string $process_step_message
 * @property Carbon $process_step_timestamp
 * @property int $user_id
 *
 * @package App\Models
 */
class RoomStatusFinaliseLog extends Model
{
	protected $table = 'room_status_finalise_log';
	protected $primaryKey = 'process_id';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int'
	];

	protected $dates = [
		'process_for_business_date',
		'process_step_timestamp'
	];

	protected $fillable = [
		'process_for_business_date',
		'process_message_type',
		'process_step_name',
		'process_step_message',
		'process_step_timestamp',
		'user_id'
	];
}
