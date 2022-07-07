<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RoomStatusUploadLog
 * 
 * @property int $process_id
 * @property Carbon $process_for_business_date
 * @property string $process_message_type
 * @property string $process_step_name
 * @property string $process_step_message
 * @property Carbon $process_step_timestamp
 *
 * @package App\Models
 */
class RoomStatusUploadLog extends Model
{
	protected $table = 'room_status_upload_log';
	protected $primaryKey = 'process_id';
	public $timestamps = false;

	protected $dates = [
		'process_for_business_date',
		'process_step_timestamp'
	];

	protected $fillable = [
		'process_for_business_date',
		'process_message_type',
		'process_step_name',
		'process_step_message',
		'process_step_timestamp'
	];
}
