<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ReservationPmsExportLog
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
class ReservationPmsExportLog extends Model
{
	protected $table = 'reservation_pms_export_log';
	protected $primaryKey = 'process_id';
	public $timestamps = false;

	protected $casts = [
		'reservation_id' => 'int'
	];

	protected $dates = [
		'process_for_business_date',
		'process_step_timestamp'
	];

	protected $fillable = [
		'reservation_id',
		'process_for_business_date',
		'process_step_name',
		'process_step_message',
		'process_step_timestamp'
	];
}
