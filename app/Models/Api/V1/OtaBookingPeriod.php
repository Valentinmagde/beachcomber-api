<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class OtaBookingPeriod
 * 
 * @property int $id
 * @property Carbon $date_start
 * @property Carbon $date_end
 * @property string $period
 * @property Carbon $created
 *
 * @package App\Models
 */
class OtaBookingPeriod extends Model
{
	protected $table = 'ota_booking_period';
	public $timestamps = false;

	protected $dates = [
		'date_start',
		'date_end',
		'created'
	];

	protected $fillable = [
		'date_start',
		'date_end',
		'period',
		'created'
	];
}
