<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ReservationHistory
 * 
 * @property int $reservation_history_id
 * @property int $reservation_id
 * @property string|null $message
 * @property float $accom_total
 * @property float $transfer_total
 * @property float $meal_total
 * @property float $wedding_total
 * @property float $extra_total
 * @property float $discount_total
 * @property int $user_id
 * @property int $is_sent
 * @property int|null $is_confirmation
 * @property Carbon $created_on
 * @property int $is_read
 * @property Carbon $read_on
 * @property int $is_followup
 * @property int $followup_by
 * @property Carbon $followup_on
 *
 * @package App\Models
 */
class ReservationHistory extends Model
{
	protected $table = 'reservation_history';
	protected $primaryKey = 'reservation_history_id';
	public $timestamps = false;

	protected $casts = [
		'reservation_id' => 'int',
		'accom_total' => 'float',
		'transfer_total' => 'float',
		'meal_total' => 'float',
		'wedding_total' => 'float',
		'extra_total' => 'float',
		'discount_total' => 'float',
		'user_id' => 'int',
		'is_sent' => 'int',
		'is_confirmation' => 'int',
		'is_read' => 'int',
		'is_followup' => 'int',
		'followup_by' => 'int'
	];

	protected $dates = [
		'created_on',
		'read_on',
		'followup_on'
	];

	protected $fillable = [
		'reservation_id',
		'message',
		'accom_total',
		'transfer_total',
		'meal_total',
		'wedding_total',
		'extra_total',
		'discount_total',
		'user_id',
		'is_sent',
		'is_confirmation',
		'created_on',
		'is_read',
		'read_on',
		'is_followup',
		'followup_by',
		'followup_on'
	];
}
