<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ReservationRtImportLog
 * 
 * @property int $reservation_rt_id
 * @property int|null $rtToken
 * @property int|null $unique_id
 * @property Carbon $process_for_business_date
 * @property string $process_step_name
 * @property string $process_step_message
 * @property Carbon $process_step_timestamp
 *
 * @package App\Models
 */
class ReservationRtImportLog extends Model
{
	protected $table = 'reservation_rt_import_log';
	protected $primaryKey = 'reservation_rt_id';
	public $timestamps = false;

	protected $casts = [
		'rtToken' => 'int',
		'unique_id' => 'int'
	];

	protected $dates = [
		'process_for_business_date',
		'process_step_timestamp'
	];

	protected $fillable = [
		'rtToken',
		'unique_id',
		'process_for_business_date',
		'process_step_name',
		'process_step_message',
		'process_step_timestamp'
	];
}
