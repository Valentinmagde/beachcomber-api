<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ReservationCancel
 * 
 * @property int $id
 * @property int $reservation_id
 * @property Carbon $canceled_date
 * @property int $reason_id
 * @property string $reason
 * @property int $user_id
 * @property string $user_name
 *
 * @package App\Models
 */
class ReservationCancel extends Model
{
	protected $table = 'reservation_cancel';
	public $timestamps = false;

	protected $casts = [
		'reservation_id' => 'int',
		'reason_id' => 'int',
		'user_id' => 'int'
	];

	protected $dates = [
		'canceled_date'
	];

	protected $fillable = [
		'reservation_id',
		'canceled_date',
		'reason_id',
		'reason',
		'user_id',
		'user_name'
	];
}
